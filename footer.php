<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */

?>
</main>
<!-- Footer-->
<footer class="footer">
  <div class="footer-top">
    <div class="container px-5">
      <div class="row">
        <div class="col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="" class="img-fluid">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <p class="footer-title">COMUNÍCATE CON NOSOTROS</p>
          <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp.png" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              +51 963 747 986 </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.png" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              +01 367 5288 </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/message-icon.png" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              info@rumiconcretos.pe </div>
          </div>
          <div class="d-flex align-items-start mb-3">
            <div class="flex-shrink-0">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/oficina-icon.png" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
              Oficina: A.H Olof Palmer Mz. CH Lt. 4 Chilca - Cañete, Lima </br></br>
              <b>Planta</b>: Fundo la Patita Mz D1 Chilca - Cañete, Lima
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <p class="footer-title">MENÚ</p>
          <ul>
            <li>Nosotros</li>
            <li>Productos</li>
            <li>Servicios</li>
            <li>Contacto</li>
          </ul>
        </div>
        <div class="col-md-3">
          <p class="footer-title">TEMAS DE INTERÉS</p>
          <ul>
            <li>Trabaja con nosotros</li>
          </ul>
        </div>
        <div class="col-md-3">
          <p class="footer-title">LEGAL</p>
          <ul>
            <li>Términos y condiciones</li>
            <li>Políticas de privacidad</li>

          </ul>
        </div>
      </div>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-8">
          <span class="me-3">Empresas del grupo:</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-economica.png" alt="" class="img-fluid me-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minera-rumi.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-4">
          <div class="social-links d-flex justify-content-end">
            <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.png" alt=""></a>
            <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.png" alt=""></a>
            <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png" alt=""></a>
            <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok-icon.png" alt=""></a>
            <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt=""></a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="footer-bottom text-center">
    <span>2023 © Rumi Concretos. Todos los derechos reservados | Diseñado por <a href="https://www.obi-consulting.com/" target="_blank">Obi Consulting</a></span>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>