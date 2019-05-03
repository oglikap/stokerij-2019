<?php

if( is_front_page() ) {
  wp_nav_menu(
   array(
     'theme_location' => 'stokerij-menu',
     'container' => 'ul',
     'menu_class' => 'uk-navbar-nav uk-flex-center'
   ) );
} else {
  wp_nav_menu(
   array(
     'theme_location' => 'stokerij-menu',
     'container' => 'ul',
     'menu_class' => 'uk-nav uk-nav-default'
   ) );
}

 ?>
