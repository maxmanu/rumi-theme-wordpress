<?php
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url(19, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <p class="section-title">NOTICIAS</p>
      </div>
    </div>
  </div>
</section>
<section id="section-proyectos">
  <div class="container ia-container">
    <div class="row justify-content-end">
      <div class="col-auto">
        <a href="javascript:history.back()" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-regresar.png" alt="boton-regresar">REGRESAR</a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-10 mx-auto">
        <p class="single-title"><?php echo get_the_title($post->ID); ?></p>
        <p class="before-blue"><?php echo get_field('fecha'); ?></p>
        <img src="<?php echo get_field('imagen'); ?>" class="img-fluid pb-3" alt="<?php echo get_the_title($post->ID); ?>">
        <?php echo the_content(); ?>
        <?php if (get_field('ver_mas')) { ?>
          <a class="single-link-button" href="<?php echo get_field('ver_mas'); ?>" target="_blank"><button class="btn btn-grad mt-4">VER MÁS</button></a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>