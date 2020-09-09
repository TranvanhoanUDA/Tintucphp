<?php

namespace spark\drivers\Http;

use Rct567\DomQuery\DomQuery;
use \SimplePie;
use \SimplePie_Item;
use spark\drivers\Filter\Xss;
use spark\models\PostModel;

/**
* RssImporter
*/
class RssImporter
{
    /**
     * Fetches posts and return formatted array
     *
     * @param  string $feedItem The feed item from FeedModel
     * @return array
     */
    public function fetchPosts(array $feedItem, $lastChecked = null)
    {
        $feed = new SimplePie;
        $feed->set_feed_url($feedItem['feed_url']);
        // Why we do this?
        // Because some feeds blocks the default simplepie parser useragent
        // Also to fetch fulltext, we need to make sure the article renders as it would on a normal browser
        $feed->set_useragent('Mozilla/5.0 (Windows NT 6.3; WOW64) ' .
            'AppleWebKit/537.36 (KHTML, like Gecko) ' .
            'Chrome/60.0.2214.115 Safari/537.36');

        // We don't need caching, since we will save the posts
        $feed->enable_cache(false);
        //$feed->set_cache_location(srcpath('var/cache/simplepie'));

        $feed->init();
        $posts = [];
        $xss = new Xss;

        $http = Http::getSession();

        // Support for limited number of posts retrieval
        $maxItems = (int) $feedItem['feed_max_items'];

        $feedItems = $feed->get_items();
        
        if ($maxItems > 0) {
            $feedItems = $feed->get_items(0, $maxItems);
        }

        foreach ($feedItems as $item) {
            $post = self::getPostFormat();


            $post['post_pubdate'] = $item->get_date('U');

            // If timestamps are in the future they should be listed as current timestamp
            if ($post['post_pubdate'] > time()) {
                $post['post_pubdate'] = time();
            }



            if (!$post['post_pubdate']) {
                $post['post_pubdate'] = time();
            }

            // If we checked earlier we should've found this post
            // so skip if the last refreshed time is higher than the post date
            if ($feedItem['feed_last_refreshed'] > $post['post_pubdate']) {
                continue;
            }


            // Some feed have the title already html escaped this will cause problem in the views
            // So we decode the entities and will escape them on view
            $post['post_title'] = html_entity_decode($item->get_title(), ENT_QUOTES | ENT_HTML5, 'UTF-8');

            $post['post_title'] = sp_strip_tags($post['post_title'], true);


            $post['post_excerpt'] = limit_words(sp_strip_tags($item->get_description(), true));
            $post['post_source'] = trim($item->get_link());
            $post['post_author'] = trim($item->get_author());

            if (empty($post['post_author'])) {
                $post['post_author'] = 'Anonymous';
            }
            
            // By default fallback to description
            $post['post_content'] = $item->get_content();
            // Convert to string to prevent null value
            $post['post_featured_image'] = $this->getFeaturedImage($item);

            // If full text is enabled, try to fetch that
            if ((int) $feedItem['feed_fetch_fulltext'] && !empty($feedItem['feed_fulltext_selector'])) {
                try {
                    $response = $http->get($item->get_link());

                    $body = $response->body;


                    // Fuck off script tags
                    $body = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $body);
                    // You too inline style
                    $body = preg_replace('#<style(.*?)>(.*?)</style>#is', '', $body);

                    $dom      = new DomQuery();


                    libxml_disable_entity_loader(true);
                    libxml_use_internal_errors(true);

                    $dom_document = new \DOMDocument('1.0', 'UTF-8');

                    $dom_document->loadHTML($body);
                    $dom_document->strictErrorChecking = false;
                    $dom_document->validateOnParse = false;
                    $dom_document->recover = true;

                    $dom->setDomDocument($dom_document);

                    $query = $dom->find($feedItem['feed_fulltext_selector']);


                    $html = null;

                    // usually they contain ads
                    foreach ($query as $node) {
                        $html .= $node->html();
                    }

                    if (!empty($html)) {
                        $post['post_content'] = $html;
                    }
                } catch (\Exception $e) {
                }
            }

            // Last attempt at finding featured image
            if (empty($post['post_featured_image'])) {
                preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/', $post['post_content'], $m);

                if (isset($m[1])) {
                    $ext = trim(pathinfo($m[1], PATHINFO_EXTENSION));
                    if (!empty($ext)) {
                        $post['post_featured_image'] = trim($m[1]);
                    }
                }
            }

            // Sometimes images do matter
            if ((int) $feedItem['feed_ignore_without_image'] && empty($post['post_featured_image'])) {
                continue;
            }

            // Clean the post body
            $post['post_content'] = $xss->filter($post['post_content']);

            if (empty($post['post_source']) || is_null($post['post_source'])) {
                $post['post_source'] = 'n/a';
            }

            $post['post_featured_image'] = str_replace(
                '&amp;',
                '&',
                $post['post_featured_image']
            );

            $post = apply_filters('post_imported_after', $post, $feedItem);

            $posts[] = $post;
        }

        return $posts;
    }

    /**
     * Attempts to fetch the featured image from the item
     *
     * @param  SimplePie_Item $item
     * @return string
     */
    protected function getFeaturedImage(SimplePie_Item $item)
    {
        // First of all handle YouTube feeds
        $yt = $item->get_item_tags('http://www.youtube.com/xml/schemas/2015', 'videoId');

        if (isset($yt[0]['data'])) {
            return "https://i1.ytimg.com/vi/{$yt[0]['data']}/maxresdefault.jpg";
        }


        // Look for an image tag
        $image = $item->get_item_tags('', 'image');

        // Are we looking at a direct image url?
        if (isset($image[0]['data']) && !empty(trim($image[0]['data']))) {
            return $image[0]['data'];
        }

        // So, we have an image child then
        if (isset($image[0]['child']['']['url'][0]['data']) && !empty(trim($image[0]['child']['']['url'][0]['data']))) {
            return $image[0]['child']['']['url'][0]['data'];
        }


        $medias = $item->get_item_tags(SIMPLEPIE_NAMESPACE_MEDIARSS, 'group');


        if (isset($medias[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['content']) && is_array($medias[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['content'])) {
            foreach ($medias[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['content'] as $key => $content) {
                // No URLs means no business
                if (!isset($content['attribs']['']['url'])) {
                    continue;
                }

                // Make sure we only use image mime type not video or flash
                if (isset($content['attribs']['']['type']) &&
                    strpos($content['attribs']['']['type'], 'image') !== false) {
                } else {
                    continue;
                }

                // If the isDefault is set (mostly found in feedburner) return that
                if (isset($content['attribs']['']['isDefault']) && strtolower($content['attribs']['']['isDefault']) == 'true') {
                    return $content['attribs']['']['url'];
                }


                // Fallback to the URL
                return $content['attribs']['']['url'];
            }
        }

        // Hotfix for YouTube channel feeds and other feeds that use media:group and a media:thumbnail tag inside
        if (isset($medias[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['thumbnail'][0]['attribs']['']['url'])) {
            return $medias[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['thumbnail'][0]['attribs']['']['url'];
        }

        // Support for multiple enclosures added
        $enclosures = $item->get_enclosures();

        if (is_array($enclosures)) {
            foreach ($enclosures as $enclosure) {
                // We found an image, tada
                if (strpos($enclosure->get_type(), 'image') !== false ||
                    $enclosure->medium === 'image'
                ) {
                    return $enclosure->get_link();
                }
            }
        }

        // Fallback for a bug where get_encloures() wont even return all the enclosures
        // so in case we dont miss out our only one enclosure
        // put this here just in case
        // We found an image, tada
        if (strpos($enclosure->get_type(), 'image') !== false ||
            $enclosure->medium === 'image'
        ) {
            return $enclosure->get_link();
        }

        // Try to fetch the featured image via the image tag
        $image = $item->get_item_tags('', 'image');

        if (isset($image[0]['child']['']['url'][0]['data'])) {
            return $image[0]['child']['']['url'][0]['data'];
        }


        // If we're lucky we might get a thumbnail tag, but they're last resort since they tend to be small
        $thumbnail = $item->get_thumbnail();

        if (!empty($thumbnail['url'])) {
            return $thumbnail['url'];
        }

        return '';
    }

    public static function getPostFormat()
    {
        return [
            'post_title' => '',
            'post_content' => '',
            'post_featured_image' => '',
            'post_excerpt' => '',
            'post_source' => '',
            'post_pubdate' => 0,
            'post_type' => PostModel::TYPE_IMPORTED
        ];
    }
}
