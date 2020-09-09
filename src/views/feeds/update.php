<?php block('content'); ?>
<div class="row"><div class="container">
    <?= sp_alert_flashes('feeds'); ?>
    <form method="post" action="?" class="card" data-parsley-validate>
        <?=$t['csrf_html']?>
      <div class="card-body">
            <div class="form-group">
            <label class="form-label" for="feed_name"><?= __('Feed Name'); ?></label>
            <input type="text" name="feed_name" id="feed_name" class="form-control" value="<?= sp_post('feed_name', $t['feed.feed_name']); ?>" maxlength="200" required>
            <div class="form-text text-muted">
                <?= __('Feed name, for reference purpose.'); ?>
            </div>
            </div>
            <div class="form-group">
            <label class="form-label" for="feed_url"><?= __('Feed URL'); ?></label>
            <input type="text" name="feed_url" id="feed_url" class="form-control" value="<?= sp_post('feed_url', $t['feed.feed_url']); ?>" maxlength="200" required>
            <div class="form-text text-muted">
                <?= __('URL to the feed.'); ?>
            </div>
            </div>

            <div class="form-group">
            <label class="form-label" for="feed_logo_url"><?= __('Feed Logo URL'); ?></label>
            <input type="text" name="feed_logo_url" id="feed_logo_url" class="form-control" value="<?= sp_post('feed_logo_url', $t['feed.feed_logo_url']); ?>" maxlength="250">
            <div class="form-text text-muted">
                <?= __('Logo URL for the feed. (optional)'); ?>
            </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="feed_category_id"><?= __('Feed Category'); ?></label>
              <select name="feed_category_id" id="feed_category_id" class="form-control" required>
                <?php foreach ($t['categories'] as $category) :?>
                  <option value="<?= e_attr($category['category_id']); ?>" <?= selected($category['category_id'], sp_post('feed_category_id', $t['feed.feed_category_id'])); ?>><?= e($category['category_name']); ?></option>
                <?php endforeach; ?>
              </select>
              <div class="form-text text-muted">
                <?= __('Category of the feed'); ?>
              </div>
            </div>

            <div class="form-group">
            <label class="form-label" for="feed_priority"><?= __('Feed Priority'); ?></label>
            <input type="number" name="feed_priority" id="feed_priority" class="form-control" value="<?= sp_post('feed_priority', $t['feed.feed_priority']); ?>" maxlength="10" required>
            <div class="form-text text-muted">
                <?= __('Feed priority, lower numbers will be executed early'); ?>
            </div>
            </div>

            <div class="form-group">
            <label class="form-label" for="feed_max_items"><?= __('Feed Max. Items'); ?></label>
            <input type="number" name="feed_max_items" id="feed_max_items" class="form-control" value="<?= sp_post('feed_max_items', $t['feed.feed_max_items']); ?>" maxlength="10" required>
            <div class="form-text text-muted">
                <?= __('Maximum number of items to fetch at each refresh, set this to 0 to fetch all the items.'); ?>
            </div>
            </div>
        <div class="form-group">
          <label class="form-label" for="feed_fetch_fulltext"><?= __('Feed Fetch Fulltext'); ?></label>
          <label class="custom-switch mt-3">
            <input type="hidden" name="feed_fetch_fulltext" value="0">
            <input type="checkbox" data-toggle-prefix=".fulltext-dom-" id="feed_fetch_fulltext" name="feed_fetch_fulltext" value="1" class="custom-switch-input" <?php checked(1, (int) sp_post('feed_fetch_fulltext', $t['feed.feed_fetch_fulltext'])); ?>>
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description"> <?= __('Feed Fetch Fulltext'); ?></span>
          </label>
          <span class="form-text text-muted"><?= __('If enabled we will attempt to fetch full text otherwise just the excerpt.'); ?></span>
        </div>

        <section class="fulltext-dom-1">
          <div class="form-group">
            <label class="form-label" for="feed_fulltext_selector"><?= __('Fulltext Selector'); ?></label>
            <input class="form-control" maxlength="100" type="text" name="feed_fulltext_selector" id="feed_fulltext_selector" placeholder="#content .article-body" value="<?= sp_post('feed_fulltext_selector', $t['feed.feed_fulltext_selector']); ?>" <?= ((int) $t['feed.feed_fetch_fulltext']) ? 'required' : ''?>>

          <span class="form-text text-muted"><?= __('CSS style HTML selector for fulltext. This is required if you want to fetch fulltext. <br>Any standard css selector will work, for
          example: <code>#content .article-body</code>'); ?></span>
          </div>
        </section>
        <div class="form-group">
          <label class="form-label" for="feed_auto_update"><?= __('Feed Auto Update'); ?></label>
          <label class="custom-switch mt-3">
            <input type="hidden" name="feed_auto_update" value="0">
            <input type="checkbox" id="feed_auto_update" name="feed_auto_update" value="1" class="custom-switch-input" <?php checked(1, (int) sp_post('feed_auto_update', $t['feed.feed_auto_update'])); ?>>
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description"> <?= __('Feed Auto Update'); ?></span>
          </label>
          <span class="form-text text-muted"><?= __('Choose if the feed would be auto updated via cron job'); ?></span>
        </div>

        <div class="form-group">
          <label class="form-label" for="feed_ignore_without_image"><?= __('Ignore posts without featured image'); ?></label>
          <label class="custom-switch mt-3">
            <input type="hidden" name="feed_ignore_without_image" value="0">
            <input type="checkbox" id="feed_ignore_without_image" name="feed_ignore_without_image" value="1" class="custom-switch-input" <?php checked(1, (int) sp_post('feed_ignore_without_image', $t['feed.feed_ignore_without_image'])); ?>>
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description"> <?= __('Ignore posts without feat. image'); ?></span>
          </label>
          <span class="form-text text-muted"><?= __('Choose if the feed the posts will be ignored if they don\'t have any featured image. This may effect the Feed Max. Items setting.'); ?></span>
        </div>
      </div>
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary ml-auto"><?=__('Update')?></button>
      </div>
    </form>
  </div>
</div>
<?php endblock(); ?>
<?php block('body_end'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $(document).formToggle();

    $(document).on('change', '#feed_fetch_fulltext', function(e) {
      var selector_input = $('#feed_fulltext_selector');
      if (this.checked) {
        selector_input.attr('required', '');
      } else {
        selector_input.removeAttr('required');
      }
    });
});
</script>
<?php endblock(); ?>
<?php
extend(
    'admin::layouts/skeleton.php',
    [
      'title' => __('Update Feed'),
      'body_class' => 'feeds feeds-create',
      'page_heading' => __('Update Feed'),
      'page_subheading' => __('Modify existing feed.'),
    ]
);
