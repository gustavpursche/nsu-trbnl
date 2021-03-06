<?php

  $image = get_field('image');
  $title = get_field('title');
  $subtitle = get_field('subtitle');

  $image_src = wp_get_attachment_image_src($image, false);
  $image_height = $image_src[2];
  $image_width = $image_src[1];
  $image_size = 'full-width';

  if ($image_width > $image_height) {
    $image_orientation = 'landscape';
  } else {
    $image_orientation = 'portrait';
    $image_size = 'half-width';
  }

?>

<div class="intro intro--orientation-<?php echo $image_orientation; ?>">

  <div class="intro__image-container">
    <?php echo wp_get_attachment_image($image, $image_size, false, [
      'class' => 'image intro__image'
    ]); ?>
  </div>

  <div class="intro__content-container constraint">
    <h1 class="headline headline--as-h1">
      <?php echo $title ?>

      <?php if($subtitle): ?>
        <small class="intro__subtitle">
          <?php echo $subtitle; ?>
        </small>
      <?php endif; ?>
    </h1>
  </div>
</div>
