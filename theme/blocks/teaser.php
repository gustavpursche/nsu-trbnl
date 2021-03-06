<?php

  $text = get_field('text');
  $target = get_field('target');
  $button_label = get_field('button_label');

  $images = get_field('images');
  $has_images = $images && (sizeof($images) > 1 || ( sizeof($images) == 1 && $images[0]['image'] != false ));

  $videos = get_field('videos');
  $has_videos = $videos && (sizeof($videos) > 1 || ( sizeof($videos) == 1 && $videos[0]['youtube_video_id'] != false ));

?>

<div class="teaser">
  <div class="teaser__title-container">
    <h2 class="headline headline--as-h2">
      <?php if ($target): ?>
        <a href="<?php echo $target; ?>">
      <?php endif; ?>
          <?php echo get_field('title'); ?>
      <?php if ($target): ?>
        </a>
      <?php endif; ?>
    </h2>
  </div>

  <?php if ($has_images): ?>
    <div class="constraint constraint--wide">
      <?php get_template_part('template-parts/images/grid'); ?>
    </div>
  <?php endif; ?>

  <?php if ($has_videos): ?>
    <div class="constraint constraint--wide">
      <?php get_template_part('template-parts/videos/grid'); ?>
    </div>
  <?php endif; ?>

  <div class="constraint">
    <?php if($text): ?>
      <div class="richtext"><?php echo $text; ?></div>
    <?php endif; ?>

    <?php if($target && $button_label): ?>
      <div class="teaser__cta">
        <a href="<?php echo $target; ?>" class="btn">
          <?php echo $button_label; ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>
