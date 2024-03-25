<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package seed
 */

get_header();
?>
<section class="section-page d-flex align-items-end" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-laboratorio.jpg); background-repeat: no-repeat; background-position: center; background-size: cover">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="section-title">Busqueda</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container ia-container">
    <div class="row">
      <div class="col">
        <h1 class="page-title">
          <?php
          /* translators: %s: search query. */
          printf(esc_html__('Resultados para: %s', 'seed'), '<span>' . get_search_query() . '</span>');
          ?>
          <?php if (have_posts()) : ?>
          <?php
            /* Start the Loop */
            while (have_posts()) :
              the_post();
              /**
               * Run the loop for the search to output the results.
               * If you want to overload this in a child theme then include a file
               * called content-search.php and that will be used instead.
               */
              get_template_part('template-parts/content', 'search');
            endwhile;
            the_posts_navigation();
          else :
            get_template_part('template-parts/content', 'none');
          endif;
          ?>
        </h1>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
