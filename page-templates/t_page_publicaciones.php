<?php
/*
Template Name:  Publicaciones
*/
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">PUBLICACIONES</p>
      </div>
    </div>
  </div>
</section>
<section id="section-publicaciones">
  <div class="container ia-container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
          "posts_per_page" => 4,
          'paged' => $paged,
          'post_type' => 'publicacion',
        ));
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="card">
              <div class="card-body">
                <p class="card-title archive-title pb-3"><?php echo get_the_title($post->ID); ?></p>
                <p class="card-text mb-0"><span class="before-blue">Autores: </span> <?php echo get_field('autores'); ?></p>
                <p class="card-text"><span class="before-blue">Año: </span> <?php echo get_field('ano'); ?></p>
                <a target="_blank" href="<?php echo get_field('ver_mas'); ?>"><button class="btn btn-grad mt-4">VER MÁS</button></a>
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