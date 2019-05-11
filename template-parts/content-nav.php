<?php

/* The template for the navigation part */ ?>

<nav class="uk-navbar-container uk-navbar-transparent uk-padding" uk-navbar>

  <!-- LOGO SECTION -->
  <?php if ( !is_front_page() ): ?>
    <div class="uk-position-top-left">

      <div class="bs-vertical-box">

      <a class="uk-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="border-bottom: 0;"><img src="<?php echo get_template_directory_uri() . '/images/logo-square-transp.png'; ?>" alt="De Stokerij Schiedam" /> </a>
    </div>
    </div>
  <?php endif; ?>

  <!-- OFFCANVAS MENU -->

   <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 3" class="uk-position-top-right uk-visible@s uk-padding-small <?php if( is_front_page() || is_singular('productions') && get_field('background_img') || is_singular('opstokerij') && get_field('background_img') || is_page('jonge-stokerij') && get_field('background_img') || is_page('over') && get_field('background_img') ) { echo "uk-light"; } ?>"></a>

   <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 2" class="uk-position-top-right uk-hidden@s uk-padding-small <?php if( is_front_page() || is_singular('productions') && get_field('background_img') || is_singular('opstokerij') && get_field('background_img') || is_page('jonge-stokerij') && get_field('background_img') || is_page('over') && get_field('background_img') ) { echo "uk-light"; } ?>"></a>

   <div class="uk-offcanvas-content">
     <div id="bs-toggle-menu" uk-offcanvas="overlay: true">
       <div class="uk-offcanvas-bar uk-text-uppercase">

         <?php get_template_part( 'template-parts/content', 'menu' ); ?>

       </div>
     </div>
   </div>

</nav>
