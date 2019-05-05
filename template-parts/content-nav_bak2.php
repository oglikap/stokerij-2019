<?php
/* The template part for displaying the navigation menu */
 ?>

 <!-- LOGO SECTION -->
 <?php if ( !is_front_page() ): ?>
   <div class="uk-position-top-left">

     <h1 class="uk-padding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="border-bottom: 0;"><img src="<?php echo get_template_directory_uri() . '/images/logo-square-transp.png'; ?>" alt="De Stokerij Schiedam" width="75" /> </a></h1>

   </div>
 <?php endif; ?>

 <!-- Display navigation -->
 <div>
   <!-- TOGGLE ICON -->
   <a href="#offcanvas-slide" class="uk-visible@s uk-position-top-right uk-padding <?php if( is_singular('producties') || is_front_page() ) { echo "uk-light"; } ?>" uk-toggle uk-icon="icon: menu; ratio: 3"></a>

    <a href="#offcanvas-slide" class="uk-hidden@s uk-position-top-right uk-padding" uk-toggle uk-icon="icon: menu; ratio: 2"></a>

   <!-- OFFCANVAS MENU -->
    <div class="uk-offcanvas-content">

      <div id="offcanvas-slide" uk-offcanvas>
        <div class="uk-offcanvas-bar">

          <?php get_template_part( 'template-parts/content', 'menu' ); ?>

        </div>
      </div>

    </div>

 </div>
