<?php echo'<?xml version="1.0" encoding="utf-8"?>'; ?>
<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/" xmlns:feedburner="http://rssnamespace.org/feedburner/ext/1.0" version="2.0">
    <channel>
        <title><?= e(get_option('site_name')); ?></title>
        <link><?= e(base_uri()); ?></link>
        <description><?= e(get_option('site_description')); ?></description>
        <lastBuildDate><?= date(DATE_RSS, $t['last_build_date']); ?></lastBuildDate>
        <sy:updatePeriod>hourly</sy:updatePeriod>
        <sy:updateFrequency>1</sy:updateFrequency>
        <?php foreach ($t['entries'] as $item) : ?>
            <item>
                <title><?= e($item['post_title']); ?></title>
                <link><?= e(url_for('site.read', ['slug' => urlencode($t['slug']->generate($item['post_title'])), 'id' => $item['post_id']])); ?></link>
               <guid isPermaLink="true"><?= e(url_for('site.read', ['slug' => urlencode($t['slug']->generate($item['post_title'])), 'id' => $item['post_id']])); ?></guid>
                <pubDate><?= date(DATE_RSS, $item['created_at']); ?></pubDate>
                <description><![CDATA[<?= e($item['post_excerpt']); ?>]]></description>
            </item>
        <?php endforeach; ?>
    </channel>
</rss>
