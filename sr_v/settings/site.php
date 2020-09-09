<?php breadcrumb_add('dashboard.settings.debug', __('Site')); ?>

<?php block('form-content'); ?>
<h4 class="py-0 px-3 font-weight-normal border-bottom border-dark h5">
  <span class="d-inline bg-white px-2 py-3 text-primary"><?= __('Feeds & Home'); ?></span>
</h4>
<div class="form-group">
  <label class="form-label" for="trends_region"><?= __('Trending searches region'); ?></label>
  <select name="trends_region" id="trends_region" class="form-control">
        <?php foreach ($t['regions'] as $key => $name) : ?>
        <option value="<?= e_attr($key); ?>" <?= selected(sp_post('trends_region', get_option('trends_region')), $key); ?> ><?= e($name); ?></option>
        <?php endforeach; ?>
  </select>
  <span class="form-text text-muted"><?= __('Choose the region of the trending searches. You may need to clear the cache from <code>Settings > Debugging</code> to see the changes.'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="latest_posts_count"><?= __('Latest posts count'); ?></label>
  <input type="number" class="form-control" name="latest_posts_count" id="latest_posts_count" value="<?= sp_post('latest_posts_count', get_option('latest_posts_count')); ?>" maxlength="10" min="1" required>
  <span class="form-text text-muted"><?= __('Number of latest posts to show on homepage'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="max_slider_items"><?= __('Slider posts count'); ?></label>
  <input type="number" class="form-control" name="max_slider_items" id="max_slider_items" value="<?= sp_post('max_slider_items', get_option('max_slider_items')); ?>" maxlength="10" min="1" required>
  <span class="form-text text-muted"><?= __('Number of latest posts to show on slider'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="popular_posts_count"><?= __('Popular posts count'); ?></label>
  <input type="number" class="form-control" name="popular_posts_count" id="popular_posts_count" value="<?= sp_post('popular_posts_count', get_option('popular_posts_count')); ?>" maxlength="10" min="1" required>
  <span class="form-text text-muted"><?= __('Number of popular posts to show on the sidebar'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="related_posts_count"><?= __('Related posts count'); ?></label>
  <input type="number" class="form-control" name="related_posts_count" id="related_posts_count" value="<?= sp_post('related_posts_count', get_option('related_posts_count', 3)); ?>" maxlength="10" min="0" required>
  <span class="form-text text-muted"><?= __('Number of related posts to show on the article page, use 0 to disable.'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="category_posts_count"><?= __('Number of posts per category page'); ?></label>
  <input type="number" class="form-control" name="category_posts_count" id="category_posts_count" value="<?= sp_post('category_posts_count', get_option('category_posts_count')); ?>" maxlength="10" min="1" required>
  <span class="form-text text-muted"><?= __('Number of posts to show per page on the category view'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="feed_redirection"><?= __('Enable Feed Redirection'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="feed_redirection" value="0">
    <input type="checkbox" name="feed_redirection" value="1" class="custom-switch-input" <?= checked(1, get_option('feed_redirection')); ?>>
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Enable Feed Redirection'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Choose if clicking on the feed items will redirect to their original source page or not.'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="auto_delete_posts_after"><?= __('Automatically delete old posts after'); ?></label>
  <div class="input-group">
    <input type="number" class="form-control" name="auto_delete_posts_after" id="auto_delete_posts_after" value="<?= sp_post('auto_delete_posts_after', get_option('auto_delete_posts_after')); ?>" maxlength="10" min="0" required>  <div class="input-group-append">
      <span class="input-group-text"><?= __('days'); ?></span>
    </div></div>


    <span class="form-text text-muted"><?= __('Set after how many days the imported posts will be deleted automatically. Set this to <strong>0</strong> to disable the feature. Cron must be set-up in order this to work'); ?></span>
  </div>
<h4 class="py-0 px-3 font-weight-normal border-bottom border-dark h5">
  <span class="d-inline bg-white px-2 py-3 text-primary"><?= __('Search'); ?></span>
</h4>
  <div class="form-group">
    <label class="form-label" for="search_items_count"><?= __('Search results per page'); ?></label>
    <input type="number" class="form-control" name="search_items_count" id="search_items_count" value="<?= sp_post('search_items_count', get_option('search_items_count')); ?>" max="40" min="1" required>
    <span class="form-text text-muted"><?= __('Number of web searches to show per-page'); ?></span>
  </div>
  
<div class="form-group">
  <label class="form-label" for="enable_search_ads"><?= __('Enable Search Ads'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="enable_search_ads" value="0">
    <input type="checkbox" name="enable_search_ads" value="1" class="custom-switch-input" <?= checked(1, get_option('enable_search_ads')); ?>>
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Enable Search Ads'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('If your CSE has AdSense enabled, enabling this option will display the ads on search results.'); ?></span>
</div>
  
<!--<div class="form-group">
  <label class="form-label" for="enable_yt_downloader"><?= __('Enable YouTube Downloader'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="enable_yt_downloader" value="0">
    <input type="checkbox" name="enable_yt_downloader" value="1" class="custom-switch-input" <?= checked(1, get_option('enable_yt_downloader', 1)); ?>>
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Enable YouTube Downloader'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Toggle this to enable/disable the YouTube Downloader for the entire site.'); ?></span>
</div>-->
<?php endblock(); ?>
<?php
// Extends the base skeleton
    extend(
        'admin::layouts/settings_skeleton.php',
        [
        'title' => __('Site Settings'),
        'body_class' => 'settings site-settings',
        'page_heading' => __('Site Settings'),
        'page_subheading' => __("Manage over-all site"),
        ]
    );
