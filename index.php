<?php
/**
 * Main template file.
 * 
 * @package Aquila
 */
get_header();
?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php
      if ( have_posts() ) :
        ?>
        <div class="container">
        <?php
        if ( is_home() && !is_front_page() ) {
          ?>
          <header class="mt-5">
            <h1 class="page-title screen-reader-text">
              <?php
              single_post_title();
              ?>
            </h1>
          </header>
        <?php
        }
        ?>

          <div class="row">
            <?php
          
            //Start the loop.
            while ( have_posts() ) : the_post();
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <?php get_template_part( 'template-parts/content'); ?>
            </div>
            <?php
            endwhile;
            ?>
            </div>
          </div>
        </div>
        <?php

      else : get_template_part( 'template-parts/content-none' );

      endif;
      ?>
    </main>
  </div>

<?php get_footer(); ?>