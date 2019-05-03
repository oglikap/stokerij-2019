<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <?php if( is_front_page() ) { ?>

      <header class="uk-background-secondary">

        <!-- <div class="uk-section uk-padding-remove uk-animation-fade" id="hero" uk-height-viewport style="background: url(<//?php if( get_field('background_img') ): the_field('background_img'); endif; ?>) center no-repeat; background-size: cover;"> -->

        <div class="uk-section uk-padding-remove" id="hero" uk-height-viewport uk-slideshow="animation: scale; finite: true">

          <div class="uk-position-relative uk-visible-toggle" tabindex="-1" >

            <?php $images = get_field( 'slider' );

            if( $images ): ?>

            <ul class="uk-slideshow-items" uk-height-viewport>

              <?php foreach( $images as $image ): ?>

                <li>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" uk-cover>
                </li>

              <?php endforeach; ?>

            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            <?php endif; ?>

          </div>
          <div class="bs-hero-bg" style="background: rgba(0, 0, 0, .5);">

            <div>
              <h1 class="uk-position-center">
                <?php the_custom_logo(); ?>
              </h1>

            </div>

          </div>
        </div>

        <!-- <div class="uk-position-bottom bs-front-menu" style="background: rgba(0, 0, 0, .5);">
          <//?php get_template_part( 'template-parts/content', 'menu' ); ?>
          <ul class="uk-navbar-nav uk-flex-center">
            <li>
              <a href="#producties" uk-scroll>Producties</a>
            </li>
            <li>
              <a href="#nieuws" uk-scroll>Nieuws</a>
            </li>
            <li>
              <a href="#agenda" uk-scroll>Agenda</a>
            </li>
          </ul>
        </div> -->

        <!-- </div> -->

      </header>

    <?php } else {

      get_template_part( 'template-parts/content', 'nav' );

    } ?>
