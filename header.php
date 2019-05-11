<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>

    <?php if( is_front_page() || is_singular('productions') || is_singular('opstokerij') || is_page('jonge-stokerij') || is_page(2) ) {

      // CONDITIONAL TO DETERMINE WHETHER TO SHOW
      // BG PICTURE OR SLIDER
      if( get_field('background_img') && !get_field('slider') ) {

        get_template_part( 'template-parts/front/hero/content', 'noslider' );

       } // endif bg or slider
      elseif ( get_field( 'slider' ) ) {

        get_template_part( 'template-parts/front/hero/content', 'slider' );

      }

       else {

        get_template_part( 'template-parts/content', 'nav' );

      } ?>

    <?php
    // END IF is_front_page
    }

    else {

      get_template_part( 'template-parts/content', 'nav' );

    } ?>

    </header>
