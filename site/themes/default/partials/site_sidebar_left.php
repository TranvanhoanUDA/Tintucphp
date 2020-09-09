<?php
/**
* @hook Fires at the left sidebar of the feeds page
*/
do_action('feed_left_sidebar_before');
?>

<nav class="navbar-light">

  <div class="navbar-collapse offcanvas-collapse" id="topnavbar">
    <button data-action="offcanvas-close" data-target="#topnavbar" class="btn btn-link close d-lg-none">&times;</button>
    <h6 class="dropdown-header font-weight-600 d-lg-none px-0 mb-2"><?= __('site-menu', _T); ?></h6>

    <ul class="nav navbar-categories flex-column">

        <li class="nav-item">
          <a class="nav-link <?= e_attr($t["home_active"]); ?>" href="<?= e_attr(url_for('site.home')); ?>">
            <?= svg_icon('paper', 'text-secondary mr-1'); ?>
            <?= __('category-label-everything', _T); ?>
          </a>
        </li>

        <?php foreach ($t['categories'] as $category) : ?>
        <li class="nav-item">
          <a class="nav-link <?= e_attr($t["{$category['category_id']}_active"]); ?>" href="<?= e_attr(url_for('site.category', ['slug' => $category['category_slug']])); ?>">
            <img src="<?= e_attr(category_icon_url($category['category_icon'])); ?>" class="category-icon mr-1">
            <?= e(__(
              "category-label-{$category['category_slug']}",
              _T,
              ['defaultValue' => $category['category_name']]
              )
              ); ?>
          </a>
        </li>
        <?php endforeach; ?>
    </ul>
  </div>
</nav>

<div class="ad-block d-none d-md-block"><?= get_option('ad_unit_2'); ?></div>
<?php
/**
* @hook Fires at the end of left sidebar of the feeds page
*/
do_action('feed_left_sidebar_after');
?>
