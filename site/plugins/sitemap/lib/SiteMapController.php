<?php

namespace mirazmac\plugins\SiteMap;

use spark\controllers\Controller;
use spark\helpers\UrlSlug;
use spark\models\PostModel;

/**
* SiteMapController
*/
class SiteMapController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Chỉ mục trang cho sơ đồ trang web
     *
     */
    public function sitemapIndex()
    {
        $app = app();
        $data = [];
        $postModel = new PostModel;
        
        $total = $postModel->countRows();
        // Mặc dù tỷ lệ của Google là 50.000 mỗi trang,
        // nhưng tốt hơn là nên tách ra vì tốc độ thu thập dữ liệu
        $sitemapItemsPerPage = (int) get_option('sitemap_links_per_page', 1000);

        $numberOfSiteMaps = round($total / $sitemapItemsPerPage);

        // Vì vậy, chỉ có một nó là
        if ($numberOfSiteMaps < 1) {
            $numberOfSiteMaps = 1;
        }

        $data['total_sitemaps'] = $numberOfSiteMaps;

        $app->response->headers->set('content-type', 'application/xml');
        return view('sitemap::sitemap-index.php', $data);
    }

    /**
     * Sơ đồ trang web
     *
     * 
     */
    public function sitemap($page = 1)
    {
        $app = app();
        $data = [];

        $app->response->headers->set('content-type', 'application/xml');

        $postModel    = new PostModel;

        $itemsPerPage = (int) get_option('sitemap_links_per_page', 1000);
        $offset = ($page - 1) * $itemsPerPage;

        $items = $postModel->readMany(
            ['post_id', 'post_title', 'updated_at'],
            $offset,
            $itemsPerPage,
            ['sort' => 'oldest']
        );

        $data['slug'] = new UrlSlug;

        $data['entries'] = $items;

        return view('sitemap::sitemap-single.php', $data);
    }


    /**
     * Rss
     *
     * @return
     */
    public function rssIndex()
    {
        $app = app();
        $data = [];

        $page = (int) $app->request->get('page', 1);

        $app->response->headers->set('content-type', 'application/xml');

        $postModel    = new PostModel;

        $itemsPerPage = (int) get_option('rss_items_per_page', 50);
        $offset = ($page - 1) * $itemsPerPage;

        $items = $postModel->readMany(
            ['post_id', 'post_title', 'post_excerpt', 'created_at', 'updated_at'],
            $offset,
            $itemsPerPage,
            ['sort' => 'newest']
        );

        $data['last_build_date'] = time();

        if (isset($items[0]['updated_at'])) {
            $data['last_build_date'] = $items[0]['updated_at'];
        }

        $data['slug'] = new UrlSlug;

        $data['entries'] = $items;

        return view('sitemap::rss.php', $data);
    }
}
