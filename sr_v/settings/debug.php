<?php breadcrumb_add('dashboard.settings.debug', __('Debugging')); ?>

<?php block('form-content'); ?>
<div class="form-group">
  <label class="form-label"><?= __('Cron Job Command'); ?></label>
  <div class="form-control-plaintext">
    <?php if (is_demo()) : ?>
      <code><?= __('command hidden in demo mode'); ?></code>
  <?php else : ?>
    <code>wget -q -O /dev/null "<?= e_attr(url_for('tasks')); ?>?token=<strong><?= e_attr(get_option('spark_cron_job_token')); ?></strong>" > /dev/null 2>&1</code>
  <?php endif; ?>
  </div>

  <span class="form-text text-muted"><?= __('Set up this cron task to run every 5/10 minutes depending your server resources'); ?></span>
</div>

<div class="form-group">
  <label class="form-label" for="regen_cron_token"><?= __('Re-generate Cron Job Token'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="regen_cron_token" value="0">
    <input type="checkbox" name="regen_cron_token" value="1" class="custom-switch-input">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Re-generate the cron token'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Regenerate the cron job token for security purpose. <span class="d-block text-danger">If you regenerate the token you will need to update your cron job from cPanel again.</span>'); ?></span>
</div>

<div class="form-group">
  <label class="form-label" for="flush_cache"><?= __('Flush Cache'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="flush_cache" value="0">
    <input type="checkbox" name="flush_cache" value="1" class="custom-switch-input">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Clear everything from the cache pool'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Completely flush the cache pool including generated thumbnails.'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="clear_attempts"><?= __('Clear Attempt Table'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="clear_attempts" value="0">
    <input type="checkbox" name="clear_attempts" value="1" class="custom-switch-input">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Clear User Attempts'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Completely flush the user attempt table'); ?></span>
</div>
<div class="form-group">
  <label class="form-label" for="clear_tokens"><?= __('Clear Expired Tokens'); ?></label>
  <label class="custom-switch mt-3">
    <input type="hidden" name="clear_tokens" value="0">
    <input type="checkbox" name="clear_tokens" value="1" class="custom-switch-input">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description"> <?= __('Clear Tokens'); ?></span>
  </label>
  <span class="form-text text-muted"><?= __('Remove expired user tokens from database'); ?></span>
</div>
<?php endblock(); ?>
<?php

// Extends the base skeleton
extend(
    'admin::layouts/settings_skeleton.php',
    [
    'title' => __('Debugging'),
    'body_class' => 'settings debug-settings',
    'page_heading' => __('Debugging'),
    'page_subheading' => __("Debug and develop"),
    'form_btn_label' => __('Run Actions')
    ]
);
