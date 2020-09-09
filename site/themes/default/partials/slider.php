<?php if (has_items($t['slider_posts'])) : ?>
<div id="latestSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach ($t['slider_posts'] as $key => $item) : ?>
      <li data-target="#latestSlider" data-slide-to="<?= e_attr($key); ?>" class="<?= $key === 0 ? 'active' : ''; ?>">
      </li>
    <?php endforeach;?>
  </ol>
  <div class="carousel-inner">
    <?php foreach ($t['slider_posts'] as $key => $t['loop']) : ?>
      <div class="carousel-item <?= $key === 0 ? 'active' : ''; ?>">
        <a href="<?= e_attr(post_url($t['loop'])); ?>" <?= post_attrs($t['loop']); ?>>  <div class="carousel-caption">
        <h3 class="caption-label"><?= e($t['loop.post_title'], false); ?></h3>
      </div>
      <img class="d-block w-100" src="<?= e_attr(feat_img_url($t['loop.post_featured_image'])); ?>" alt="<?= e_attr($t['loop.post_title']); ?>">
    </a>
  </div>
    <?php endforeach; ?>
</div>
</div>
<?php endif; ?>
