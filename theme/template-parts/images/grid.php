<?php

  $images = get_field('images');

?>

<ul class="grid grid--items-<?php echo sizeof($images); ?>">
  <?php while (have_rows('images')) : the_row(); ?>
    <li class="grid__item">
      <?php get_template_part('template-parts/images/image'); ?>
    </li>
  <?php endwhile; ?>
</ul>
