<?php block('content'); ?>
<div class="container post-container px-0">
    <div class="post-single shadow no-shadow-xs bg-white py-3 mt-0 mt-md-3">
        <h1 class="post-single-title h3 px-md-4 px-2 mb-0">
            <?= e($t['post.post_title'], false); ?>
        </h1>

        <div class="post-single-meta py-2 px-md-4 px-2 text-muted">
            <img src="<?= feed_logo_url($t['post.feed_logo_url']); ?>" class="feed-logo-img">
            <?= svg_icon('time', 'ml-1'); ?>
            <?= time_ago($t['post.post_pubdate'], _T); ?>

            <?= svg_icon('eye-outline'); ?>
            <?= localize_numbers($t['post.post_hits'], _T); ?>
        </div>
        <div class="post-single-share py-1 px-md-4 px-0 text-md-left text-center">
            <a href="https://facebook.com/sharer/sharer.php?u=<?= e_attr(get_current_route_uri()); ?>" class="btn btn-facebook rounded-0 btn-share" data-toggle="tooltip" title="<?= e_attr(__('Share on Facebook', _T)); ?>" target="_blank" rel="noopener">
                <?= svg_icon('facebook'); ?>
            </a>
            <a href="http://twitter.com/share?text=<?= e_attr($t['post.post_title']); ?>&url=<?= e_attr(get_current_route_uri()); ?>" class="btn btn-twitter rounded-0 btn-share" data-toggle="tooltip" title="<?= e_attr(__('Share on Twitter', _T)); ?>" target="_blank" rel="noopener">
                <?= svg_icon('twitter'); ?>
            </a>
            <a href="https://api.whatsapp.com/send?text=<?= e_attr(get_current_route_uri()); ?>" class="btn btn-whatsapp rounded-0 btn-share" data-toggle="tooltip" title="<?= e_attr(__('Send via Whatsapp', _T)); ?>" target="_blank" rel="noopener">
                <?= svg_icon('whatsapp'); ?>
            </a>
            <a href="http://vk.com/share.php?url=<?= e_attr(get_current_route_uri()); ?>&title=<?= e_attr($t['post.post_title']); ?>" class="btn btn-vk rounded-0 btn-share" data-toggle="tooltip" title="<?= e_attr(__('Share on VK', _T)); ?>" target="_blank" rel="noopener">
                <?= svg_icon('vk'); ?>
            </a>
        </div>
        <div class="post-single-image" style="background-image:url(<?= e_attr(feat_img_url($t['post.post_featured_image'])); ?>);">
        </div>

        <div class="post-single-content py-2 px-md-4 px-2">
            <?php
            /**
             * @hook Fires before the content
             */
            do_action('feed_content_before');
            ?>

            <div class="adblock">
                <?= get_option('ad_unit_8'); ?>
            </div>
            <?= $t['post.post_content']; ?>
            <?php
            /**
             * @hook Fires after the content
             */
            do_action('feed_content_after');
            ?>
        </div>
        <?php if (!empty($t['post.post_source'])) : ?>
            <div class="post-single-source py-2 px-3 text-center">
                <a href="<?= e($t['post.post_source'], false); ?>" class="btn btn-primary" rel="nofollow noreferrer noopener" target="_blank">
                    <?= __('read-entire-article', _T); ?>
                    <?= svg_icon('arrow-forward'); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>

    <?= breadcrumb_render('<ol class="breadcrumb my-1 px-2">', '</ol>'); ?>

    <div class="single-comments py-3 px-2 clearfix">
        <?php insert('partials/disqus.php'); ?>
        <?php insert('partials/facebook.php'); ?>
    </div>
    
<?php if (has_items($t['related_posts'])) : ?>
<div class="sidebar-block mt-4 mb-2">
  <h4 class="sidebar-heading"><span><?= __('Related', _T); ?></span></h4>
        <div class="row">
        <?php foreach ($t['related_posts'] as $post) : ?>
            <div class="col-md-4">
                <?php insert('partials/related_loop.php', ['loop' => $post]); ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


    <div class="d-md-none">
        <?php insert('partials/site_sidebar_left.php'); ?>
    </div>
</div>
<?php endblock(); ?>

<?php
extend(
    'layouts/basic.php',
    [
        'body_class' => "post post-{$t['post.post_id']}",
    ]
);

