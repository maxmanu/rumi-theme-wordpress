<?php
/*
Template Name:  Contacto
*/
get_header();
?>

<section class="">
  <div class="container-fluid">
    <div class="row row-hero-page">
      <div class="col-md-5 col-left-hero-page" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-contacto.jpg') top no-repeat; background-size:cover;">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <p class="page-hero-subtitle">¿TIENES ALGUNA DUDA?</p>
            <p class="page-hero-title">CONTÁCTANOS</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 mx-auto card-contact">
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
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 mx-auto card-contact">
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
          </div>
        </div>
      </div>
      <div class="col-md-7 col-right-hero-page">
        <div class="row">
          <div class="col-xl-6 offset-xl-1 me-auto">
            <p>QUIERO CONTACTARME</p>
            <p>Selecciona:</p>
            <form class="row pt-0 g-3">
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
              </div>
              <div class="col-12">
                <input type="text" placeholder="Nombre y apellido" class="form-control" id="">
              </div>
              <div class="col-md-12">
                <input type="email" placeholder="Correo electrónico" class="form-control" id="inputEmail4">
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Teléfono" class="form-control" id="inputCity">
              </div>
              <div class="col-md-12">
                <textarea class="form-control" placeholder="Mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    He leído y acepto la política de privacidad.
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
get_footer();
?>