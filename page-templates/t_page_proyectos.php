<?php
/*
Template Name:  Proyectos
*/
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
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
    <div class="row row-cols-1 row-cols-md-2 g-5">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $query = new WP_Query(array(
        "posts_per_page" => 4,
        'paged' => $paged,
        'post_type' => 'proyecto',
      ));
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>
          <div class="col d-flex justify-content-center mb-5">
            <div class="card h-100">
              <img src="<?php echo get_field('imagen'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
              <div class="card-body">
                <p class="archive-title pb-3"><?php echo get_the_title($post->ID); ?></p>
                <?php echo the_excerpt($post->ID); ?>
                <a href="<?php echo get_permalink($post->ID); ?>"><button class="btn btn-grad mt-4">VER MÁS</button></a>
              </div>
            </div>
          </div>
      <?php
        }
      }
      wp_reset_postdata();
      ?>
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