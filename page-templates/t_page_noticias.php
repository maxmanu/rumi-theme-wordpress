<?php
/*
Template Name:  Noticias
*/
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">NOTICIAS</p>
      </div>
    </div>
  </div>
</section>
<section id="section-noticias">
  <div class="container-fluid ia-container">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query = new WP_Query(array(
      "posts_per_page" => 4,
      'paged' => $paged,
      'post_type' => 'post',
    ));
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
    ?>
        <div class="row row-card">
          <div class="col-md-10 mx-auto">
            <div class="container">
              <div class="card my-3">
                <div class="row g-md-5">
                  <div class="col-lg-6">
					  <img src="<?php echo get_field('imagen'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body">
                      <p class="card-text mb-0"><span class="before-blue"><?php echo get_field('fecha'); ?></span></p>
                      <p class="card-text archive-title"><?php echo get_the_title($post->ID); ?></p>
                      <p class="card-text archive-text"><?php echo get_the_excerpt($post->ID); ?></p>
                      <a href="<?php echo get_permalink($post->ID); ?>"><button class="btn btn-grad mt-4">VER NOTICIA</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }
    wp_reset_postdata();
    ?>
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