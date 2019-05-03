<?php

/* The template for the navigation part */ ?>

<nav class="uk-navbar-container uk-navbar-transparent uk-padding" uk-navbar>

  <?php if( !is_front_page() ) { ?>

    <!-- LOGO SECTION -->
    <div class="uk-position-top-left">

    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/images/logo-square-transp.png'; ?>" alt="De Stokerij Schiedam" /> </a></h1>

    </div>

    <!-- OFFCANVAS MENU -->
     <div class="uk-offcanvas-content">

       <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 3.5" class="uk-position-top-right uk-visible@s uk-padding"></a>

       <a href="#bs-toggle-menu" uk-toggle uk-icon="icon: menu; ratio: 2.5" class="uk-position-top-right uk-hidden@s"></a>

       <div id="bs-toggle-menu" uk-offcanvas="overlay: true">
         <div class="uk-offcanvas-bar uk-text-uppercase">

             <?php get_template_part( 'template-parts/content', 'menu' ); ?>

         </div>
       </div>
     </div>

   <?php } elseif ( is_front_page() ) { ?>

     <!-- LOGO SECTION -->
     <div class="uk-text-center" style="width: 100%;">

       <h2 class="bs-site-title uk-margin-left uk-heading-primary uk-text-bold uk-heading-primary"><span style="color: rgba(255, 255, 255, .5);"> <?php bloginfo( 'name' ); ?></span></h2>

       <h3 class="uk-margin-remove-top uk-margin-left uk-light" style="color: #ffff48; opacity: .7; font-size: 2em; letter-spacing: 2px;"><?php bloginfo( 'description' ); ?></h3>

     </div>

    <?php } ?>

</nav>
