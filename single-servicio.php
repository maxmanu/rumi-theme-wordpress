<?php
get_header();
?>

<section class="">
  <div class="container-fluid">
    <div class="row row-hero-page">
      <div class="col-md-6 col-left-hero-page">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <p class="page-hero-subtitle">SERVICIOS</p>
            <p class="page-hero-title"><?php echo get_the_title(); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-right-hero-page">
        <div class="row">
          <div class="col-xl-6 offset-xl-1 me-auto">
            <p>Somos una empresa ubicada al sur de Lima dedicada a suministrar eficazmente en tiempo y forma concreto premezclado de alta calidad, cumpliendo con las normas internacionales y la norma nacional; brindando seguridad y garantía en la construcción de miles de proyectos.</p>
            <p>Teniendo claro nuestra visión y enfoque de potenciar la construcción de proyectos de larga duración, garantizando la inversión de nuestros clientes.</p>
            <p> Porque sabemos el valor e importancia que tiene para todos nuestros clientes el contar con concreto premezclado de alta calidad en la forma, tiempo y precio justo. Ese es el compromiso que nosotros asumimos. ser partícipes de llevar garantizar seguridad en la realización de los sueños de construcción de grandes proyectos.</p>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="section-rumi section-single-gallery">
  <div class="container video-mask">
    <div class="row">
      <div class="col">
        <div class="swiper single-service-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mask-video-min.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mask-video-min.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mask-video-min.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<section class="section-rumi carousel-tipos carousel-arrows-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <p class="section-title text-uppercase">Requisitos del servicio</p>
      </div>
      <div class="col-md-9 position-relative">
        <div class="row text-center">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-example.png" alt="">
            <p>Yorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-example.png" alt="">
            <p>Yorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-example.png" alt="">
            <p>Yorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-rumi section-concreto-servicio carousel-proyectos carousel-arrows-bottom" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-carousel-proyectos.jpg') center no-repeat; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col position-relative">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-rumi">
                <p>Para Techo</p>
                <p>Cemento durable y confiable para proteger nuestras edificaciones contra los rigores del clima y el paso del tiempo.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-rumi">
                <p>Para Techo</p>
                <p>Cemento durable y confiable para proteger nuestras edificaciones contra los rigores del clima y el paso del tiempo.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-rumi">
                <p>Para Techo</p>
                <p>Cemento durable y confiable para proteger nuestras edificaciones contra los rigores del clima y el paso del tiempo.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-rumi">
                <p>Para Techo</p>
                <p>Cemento durable y confiable para proteger nuestras edificaciones contra los rigores del clima y el paso del tiempo.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-rumi">
                <p>Para Techo</p>
                <p>Cemento durable y confiable para proteger nuestras edificaciones contra los rigores del clima y el paso del tiempo.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <button class="btn btn-rumi mt-3 mt-md-5">ÚNETE AL EQUIPO</button>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>