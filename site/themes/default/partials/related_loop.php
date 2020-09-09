<div class="sidebar-post-item mb-2">
        <div class="post-feat-image"><a href="<?= e(post_url($t['loop']), false); ?>" class="post-img-link" <?= post_attrs($t['loop']); ?>>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAFElEQVQYV2N8+vTpfwYGBgZGGAMAUNMHXwvOkQUAAAAASUVORK5CYII=" data-src="<?= e_attr(feat_img_url($t['loop.post_featured_image'])); ?>" alt="<?= e_attr($t['loop.post_title']); ?>" class="post-feat-img img-zoom">

        <div class="post-info p-1">
            <h3 class="post-title">
                <?= e($t['loop.post_title'], false); ?>
            </h3>
        </div>
        </a>
        </div>
</div>
