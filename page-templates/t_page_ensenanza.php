<?php
/*
Template Name:  Enseñanza
*/
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">ENSEÑANZA</p>
      </div>
    </div>
  </div>
</section>
<section id="section-ensenanza">
  <div class="container ia-container">
    <div class="row">
      <div class="col-12 col-ensenanza">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
          "posts_per_page" => 4,
          'paged' => $paged,
          'post_type' => 'taller',
        ));
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="card mb-3">
              <div class="row">
                <p class="archive-title pb-3"><?php echo get_the_title($post->ID); ?></p>
              </div>
              <div class="row g-md-5">
                <div class="col-md-6">
                  <img src="<?php echo get_field('imagen'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <?php if (get_field('fecha')) { ?>
                      <p class="card-text mb-0"><span class="before-blue">Fecha: </span> <?php echo get_field('fecha'); ?></p>
                    <?php } ?>
                    <?php if (get_field('hora')) { ?>
                      <p class="card-text mb-0"><span class="before-blue">Hora: </span> <?php echo get_field('hora'); ?></p>
                    <?php } ?>
                    <?php if (get_field('ponente')) { ?>
                      <p class="card-text mb-0"><span class="before-blue">Ponente: </span> <?php echo get_field('ponente'); ?></p>
                    <?php } ?>
                    <?php if (get_field('lugar')) { ?>
                      <p class="card-text"><span class="before-blue">Lugar: </span> <?php echo get_field('lugar'); ?></p>
                    <?php } ?>
                    <p class="card-text"><?php echo the_excerpt($post->ID); ?></p>
                    <?php if (get_field('enlace')) { ?>
                      <a target="_blank" href="<?php echo get_field('enlace'); ?>"><button class="btn btn-grad mt-4">INSCRÍBETE AQUÍ</button></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <!--paginacion-->
    <div class="row row-pagination">
      <div class="col text-center">
        <?php
        echo paginate_links(array(
          'total'    => $query->max_num_pages,
          'current'  => max(1, get_query_var('paged')),
          'prev_text' => false,
          'next_text' => false,
        ));
        ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>