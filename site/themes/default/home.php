<?php block('content'); ?>
<div class="container px-0 px-md-3">
  <div class="row no-gutters">
    <div class="col-12 col-md-2 p-0">
        <div class="sidebar sidebar-left">
        <?php insert('partials/site_sidebar_left.php'); ?>
        </div>
    </div>
    <div class="col-12 col-md-7 px-md-2 px-0">
        <?php insert('partials/slider.php'); ?>

        <h3 class="site-heading mt-3 mb-3"><span><?= __('latest', _T); ?></span></h3>

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
                        'empty_message' => __('no-posts-found', _T)
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
    'body_class' => 'home',
    ]
);

