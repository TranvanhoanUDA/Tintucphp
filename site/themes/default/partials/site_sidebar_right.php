<?php
/**
* @hook Fires at the right sidebar of the feeds page
*/
do_action('feed_right_sidebar_before');
?>

<div class="ad-block"><?= get_option('ad_unit_1'); ?></div>

<div class="sidebar-block">
  <h4 class="sidebar-heading"><span><?= __('trending', _T); ?> <?= svg_icon('trending-up', 'svg-md text-primary'); ?></span></h4>
  <div class="sidebar-body p-2 bg-white">
    <div class="row no-gutters">
      <?php foreach ($t['trends'] as $key => $query) : ?>
        <div class="col-6">
          <div class="text-truncate trend-item px-1"><?= $key+1; ?>.
            <a data-toggle="tooltip" title="<?= e_attr($query); ?>" href="<?= e_attr(url_for('site.search')); ?>?q=<?= e_attr($query); ?>"><?= e($query); ?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php if (has_items($t['popular_posts'])) : ?>
  <div class="sidebar-block">
    <h4 class="sidebar-heading"><span><?= __('popular', _T); ?> <?= svg_icon('flame', 'text-warning svg-md'); ?></span></h4>
    <?php foreach ($t['popular_posts'] as $t['loop']) : ?>
        <?php insert('partials/sidebar_loop.php'); ?>
    <?php endforeach; ?>
  </div>
<?php endif; ?>


<div class="ad-block"><?= get_option('ad_unit_4'); ?></div>

<div class="sidebar-block footer-block">
  <div class="sidebar-body bg-white py-3 px-2">
    <div class="py-1">
            <?php

            $locales = get_theme_locales();
            $last = count($locales) - 1;

            if ($last < 0) {
                $last = 0;
            }
            
            foreach ($locales as $key => $locale) : ?>
                <a href="<?php echo e_attr(url_for('site.change_locale', ['locale' => $key])); ?>" class="<?php echo $locale['active'] ? 'text-body' : ''; ?>">
                    <?php if ($locale['icon']) : ?>
                        <img class="locale-icon mr-1" src="<?php echo e_attr($locale['icon']); ?>" alt="<?php echo e_attr($locale['name']); ?>">
                    <?php endif; ?>
                    <?php echo e($locale['name']); ?> <?php if ($key != $last) :
                        ?> &middot; <?php
                    endif; ?>
                </a>
            <?php endforeach; ?>
          </div>

    <a class="footer-link" href="<?= e_attr(url_for('site.page', ['identifier' => 'about-us'])); ?>"><?= __('About Us', _T); ?></a> &middot; 
    <a class="footer-link" href="<?= e_attr(url_for('site.page', ['identifier' => 'terms'])); ?>"><?= __('Terms & Condition', _T); ?></a> &middot;
    <a class="footer-link" href="<?= e_attr(url_for('site.page', ['identifier' => 'contact-us'])); ?>"><?= __('Contact Us', _T); ?></a>
    <br>
    &copy; <?= e(get_option('site_name')) . ' ' . date('Y'); ?>. <?= __('copyright', _T); ?>
  </div>
</div>
<?php
/**
* @hook Fires after the right sidebar of the feeds page
*/
do_action('feed_right_sidebar_after');
?>
