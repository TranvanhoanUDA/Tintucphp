<?php block('form-content'); ?>
    <div class="alert alert-secondary">
        Sitemap can be found here: <a class="alert-link" href="<?= e_attr(url_for('sitemap.index')); ?>"><?= e(url_for('sitemap.index')); ?></a>
    </div>

    <div class="alert alert-dark">
        RSS feed can be found here: <a class="alert-link" href="<?= e_attr(url_for('rss.index')); ?>"><?= e(url_for('rss.index')); ?></a>
    </div>
<div class="form-group">
    <label for="sitemap_links_per_page" class="form-label">Sitemap's Items Per Page</label>
    <input type="number" name="sitemap_links_per_page" id="sitemap_links_per_page" class="form-control"
    value="<?= sp_post('sitemap_links_per_page', get_option('sitemap_links_per_page', 1000)); ?>">
    <span class="form-text text-muted">Links per page on sitemaps.</span>
</div>
<div class="form-group">
    <label for="rss_items_per_page" class="form-label">RSS Items Per Page</label>
    <input type="number" name="rss_items_per_page" id="rss_items_per_page" class="form-control"
    value="<?= sp_post('rss_items_per_page', get_option('rss_items_per_page', 50)); ?>">
    <span class="form-text text-muted">Number of latest posts to show on the RSS Feed.</span>
</div>
<?php endblock(); ?>
<?php
// Extends the plugins options skeleton
extend(
    'admin::layouts/settings_skeleton.php',
    [
        'title'           => 'Feed & SiteMap Settings',
        'body_class'      => 'plugin-options sitemap',
        'page_heading'    => 'Feed & SiteMap Settings',
        'page_subheading' => 'Customize Feed & SiteMap',
    ]
);
