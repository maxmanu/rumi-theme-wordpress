<?php
/*
Template Name:  Laboratorio
*/
get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">NOSOTROS</p>
      </div>
    </div>
  </div>
</section>
<section id="nosotros">
  <div class="container ia-container">
    <div class="row">
      <div class="col">
        <p><b>El Laboratorio de Inteligencia Artiﬁcial</b> para la Toma de Decisiones, es un espacio multidisciplinario de investigación y desarrollo, orientado a la implementación de sistemas inteligentes y la aplicación de la inteligencia artiﬁcial (IA) en el proceso de toma de decisiones en organizaciones, tanto en el ámbito público como en el privado. Esta iniciativa estratégica enfoca sus esfuerzos en tres pilares fundamentales</p>
        <p>Las técnicas empleadas incluyen machine Learning, inteligencia computacional, computación evolutiva, modelos estadísticos, matemática computacional y técnicas de toma de decisiones. Nuestras áreas de aplicación abarcan energía, petróleo, gas, economía, ﬁnanzas, cambio climático, resolución de conﬂictos, logística, políticas públicas, ciencias sociales y cualquier ámbito donde la toma de decisiones se base en datos y conocimiento avanzado de IA.</p>
        <p>Finalmente, al integrar la investigación, desarrollo de proyectos y la capacitación especializada, el Laboratorio emerge como un actor esencial en el avance y la aplicación de la IA en múltiples sectores contribuyendo de manera signiﬁcativa al progreso tecnológico y a la eﬁciencia en la toma de decisiones en todo tipo de organizaciones.</p>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-md-5 row-cards mt-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-investigacion.png" class="" alt="icono-investigacion">
          </div>
          <div class="card-body">
            <p class="title-pilares">INVESTIGACIÓN</p>
            <p class="text-pilares">La investigación científica es un pilar fundamental del laboratorio. En ese sentido, los investigadores del laboratorio se dedican a estudiar y desarrollar algoritmos y modelos de toma de decisiones orientados a la IA. Estas investigaciones contribuyen al conocimiento general en el campo de la IA y también en sostener proyectos específicos.</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-desarrollo-proyectos.png" class="" alt="icono-desarrollo-de-proyectos">
          </div>
          <div class="card-body">
            <p class="title-pilares">DESARROLLO DE PROYECTOS</p>
            <p class="text-pilares">El desarrollo de proyectos diseñados para contribuir significativamente al avance del conocimiento en IA. A través de estas iniciativas, buscamos impulsar la tecnología, desarrollar soluciones novedosas y comprender cómo la IA puede transformar diversos sectores.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-capacitacion-especializada.png" class="" alt="icono-capacitación-especializada">
          </div>
          <div class="card-body">
            <p class="title-pilares">CAPACITACIÓN ESPECIALIZADA</p>
            <p class="text-pilares">En tercer lugar, nuestro enfoque incluye la capacitación especializada en inteligencia artificial. Ofreciendo talleres destinados a la comunidad UP y organizaciones con habilidades especializadas en IA.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container ia-container">
    <div class="row">
      <div class="col">
        <p class="ia-container-title linea"><span>EQUIPO</span></p>
        <ul class="nav nav-pills my-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">INVESTIGADORES</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ASISTENTES</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">COLABORADORES</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              "posts_per_page" => -1,
              'paged' => $paged,
              'post_type' => 'integrante',
              'meta_key'      => 'tipo',
              'meta_value'    => 'PROFESORES'
            ));
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="card">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                      <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <p class="card-title mb-0"><?php echo get_the_title($post->ID); ?></p>
                        <?php echo the_content(); ?>
                        <?php if (get_field('ver_perfil')) { ?>
                          <a target="_blank" href="<?php echo get_field('ver_perfil'); ?>"><button class="btn btn-grad mt-4">VER PERFIL</button></a>
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
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              "posts_per_page" => -1,
              'paged' => $paged,
              'post_type' => 'integrante',
              'meta_key'      => 'tipo',
              'meta_value'    => 'ESTUDIANTES'
            ));
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="card">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                      <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <p class="card-title mb-0"><?php echo get_the_title($post->ID); ?></p>
                        <?php echo the_content(); ?>
                        <?php if (get_field('ver_perfil')) { ?>
                          <a target="_blank" href="<?php echo get_field('ver_perfil'); ?>"><button class="btn btn-grad mt-4">VER PERFIL</button></a>
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
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
              "posts_per_page" => -1,
              'paged' => $paged,
              'post_type' => 'integrante',
              'meta_key'      => 'tipo',
              'meta_value'    => 'COLABORADORES'
            ));
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="card">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                      <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" class="img-fluid" alt="<?php echo get_the_title($post->ID); ?>">
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <p class="card-title mb-0"><?php echo get_the_title($post->ID); ?></p>
                        <?php echo the_content(); ?>
                        <?php if (get_field('ver_perfil')) { ?>
                          <a target="_blank" href="<?php echo get_field('ver_perfil'); ?>"><button class="btn btn-grad mt-4">VER PERFIL</button></a>
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
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>