<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seed
 */

get_header();
?>

<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title"><?php echo get_the_title($post->ID); ?></p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container ia-container">
    <div class="row">
      <div class="col">
        <p>Página por defecto</p>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>