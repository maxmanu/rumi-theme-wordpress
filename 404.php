<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package seed
 */

get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-laboratorio.jpg); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title"><?php esc_html_e('404', 'seed'); ?></p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container ia-container">
    <div class="row">
      <div class="col">
        <p><?php esc_html_e('Página no encontrada', 'seed'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
