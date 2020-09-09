<?php block('content'); ?>
<?php
$bgs = ['primary', 'secondary', 'dark', 'info', 'warning', 'danger'];
$key = array_rand($bgs);
?>
<div class="hero-header bg-<?= $bgs[$key]; ?> mb-2">
    <div class="container">
        <h3 class="m-0 p-0">
         <?= e(__(
             "category-label-{$t['category.category_slug']}",
             _T,
             ['defaultValue' => $t['category.category_name']]
         )); ?>
  </h3>
</div>
</div>
<div class="container px-0 px-md-3">
  <div class="row no-gutters">
    <div class="col-12 col-md-2 p-0"><div class="sidebar sidebar-left">
        <?php insert('partials/site_sidebar_left.php'); ?></div>
    </div>
    <div class="col-12 col-md-7 px-md-2 px-0">
        <?php if (has_items($t['latest_posts'])) : ?>
            <?php foreach ($t['latest_posts'] as $t['loop']) : ?>
                    <?php insert('partials/loop.php'); ?>
            <?php endforeach; ?>

            <?= $t['pagination_html']; ?>
        <?php else : ?>
                <?php
                insert(
                    'partials/empty.php',
                    [
                        'empty_message' => __('nothing-found-category', _T)
                    ]
                );
                ?>
        <?php endif; ?>
    </div>
    <div class="col-12 col-md-3 p-0 px-md-1">
        <div class="sidebar sidebar-right">
        <?php insert('partials/site_sidebar_right.php'); ?>
    </div>
    </div>
    </div>
  </div>
<?php endblock(); ?>

<?php
extend(
    'layouts/basic.php',
    [
    'body_class' => 'category',
    ]
);

