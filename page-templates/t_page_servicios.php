<?php
/*
Template Name:  Servicios
*/
get_header();
?>

<section class="">
  <div class="container-fluid">
    <div class="row row-hero-page">
      <div class="col-md-6 col-left-hero-page">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <p class="page-hero-subtitle">NUESTROS SERVICIOS</p>
            <p class="page-hero-title">CONOCE LOS SERVICIOS QUE OFRECEMOS</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-right-hero-page">
        <div class="row">
          <div class="col-xl-6 offset-xl-1 me-auto">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="section-servicios">
  <div class="container video-mask">
    <div class="row row-cols-md-2 g-4">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $query = new WP_Query(array(
        "posts_per_page" => -1,
        'paged' => $paged,
        'post_type' => 'servicio',
      ));
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>
          <div class="col">
            <div class="card card--servicios h-100">
              <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text">Se define como la obtención de la resistencia especificada a plazos inferiores a los 28 días – normalmente entre 3 y 7 días – o la necesaria para adelantar la puesta en servicio de alguna estructura.</p>
              </div>
              <div class="card-footer">
                <a href="<?php echo get_the_permalink() ?>" class="btn"><button>VER MÁS +</button></a>
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
</section>

<?php
get_footer();
?>