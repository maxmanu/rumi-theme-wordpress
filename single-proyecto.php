<?php
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url(13, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">PROYECTOS</p>
      </div>
    </div>
  </div>
</section>
<section id="section-proyectos">
  <div class="container ia-container">
    <div class="row justify-content-end mb-5">
      <div class="col-auto">
        <a href="javascript:history.back()" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-regresar.png" alt="boton-regresar">REGRESAR</a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-8 pe-md-5">
        <p class="single-title pb-3"><?php echo get_the_title($post->ID); ?></p>
        <?php echo the_content(); ?>
        <p class="card-text mb-0"><span class="before-blue">Autores: </span><br>
          <?php echo get_field('autores'); ?>
        </p>
        <?php if (get_field('financiamiento')) { ?>
          <p class="card-text mb-0"><span class="before-blue">Financiamiento: </span><br>
            <?php echo get_field('financiamiento'); ?>
          </p>
        <?php } ?>
      </div>
      <div class="col-md-4 text-center col-right-single">
        <img src="<?php echo get_field('imagen'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
        <?php if (get_field('descargar')) { ?>
          <a target="_blank" href="<?php echo get_field('descargar'); ?>"><button class="btn btn-grad mt-4">DESCARGAR</button></a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>