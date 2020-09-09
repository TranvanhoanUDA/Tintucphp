
<div class="post-item mb-3 shadow-sm bg-white">
    <div class="d-flex justify-content-between flex-wrap p-1">

                <div class="post-feat-image pr-2 d-flex align-items-center"><a href="<?= e_attr(post_url($t['loop'])); ?>" class="post-img-link" <?= post_attrs($t['loop']); ?>>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAFElEQVQYV2N8+vTpfwYGBgZGGAMAUNMHXwvOkQUAAAAASUVORK5CYII=" data-src="<?= e_attr(feat_img_url($t['loop.post_featured_image'])); ?>" alt="<?= e_attr($t['loop.post_title']); ?>" class="post-feat-img img-zoom"></a>
        </div>
        <div class="post-info px-2 py-1"><a href="<?= e(post_url($t['loop']), true); ?>" <?= post_attrs($t['loop']); ?>>
            <h3 class="post-title" title="<?= e_attr($t['loop.post_title']); ?>">
                <?= e(limit_string($t['loop.post_title'], 70), false); ?>
            </h3></a>
            <div class="post-feed-logo mb-1">
                <img src="<?= feed_logo_url($t['loop.feed_logo_url']); ?>" class="feed-logo-img">
            </div>
            <div class="post-time text-muted py-1">
                <?= svg_icon('time', 'text-success'); ?>
                <?= time_ago($t['loop.post_pubdate'], _T); ?> 
                <?= svg_icon('eye-outline', 'text-primary'); ?>
                <?= localize_numbers($t['loop.post_hits'], _T); ?>
            </div>
        </div>

    </div>
</div>
<?php
$t['__loop'] = $t['__loop'] + 1;

if ($t['__loop'] === 4) :
    $t['__loop'] = 0;
    ?>
<div class="adblock">
    <?= get_option('ad_unit_3'); ?>
</div>
<?php endif; ?>
