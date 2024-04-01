<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package seed */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico"> -->
  <title>Rumi Concretos</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php if (is_front_page()) { ?>
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-up position-relative" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo Rumi Concretos"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo get_page_link(12); ?>">NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_page_link(16); ?>">PRODUCTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_page_link(18); ?>">SERVICIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo get_page_link(20); ?>">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
    <?php } else { ?>
      <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-up position-relative" id="navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.svg" alt="Logo Rumi Concretos"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?php echo get_page_link(12); ?>">NOSOTROS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_page_link(16); ?>">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_page_link(18); ?>">SERVICIOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_page_link(20); ?>">CONTACTO</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <main class="theme-gray-rumi">
      <?php } ?>