<div class="uk-section uk-padding-remove uk-animation-fade" id="hero" uk-height-viewport style="background: url(<?php if( get_field('background_img') ): the_field('background_img'); endif; ?>) center no-repeat; background-size: cover;">

  <div class="bs-hero-bg uk-flex uk-flex-center uk-flex-bottom" uk-height-viewport style="background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .5))">

    <div class="uk-position-top">
      <?php get_template_part( 'template-parts/content', 'nav' ); ?>
    </div>

    <?php // BLOCK HOME-PAGE
    if( is_front_page() ) { ?>

      <div class="uk-text-center uk-light" >
        <h1 class="uk-padding">
          <?php the_custom_logo(); ?>
        </h1>
        <div class="uk-margin-large-bottom uk-margin-top" style="font-size: 13px;">
          <p style="width: 50%;font-size: 1.5em;" class="uk-margin-auto uk-text-uppercase">
            <?php the_field('slogan') ?>
          </p>
        </div>

        <h3 class="uk-text-uppercase uk-margin-large">Naar onze voorstellingen<br><a href="#bs-productions" uk-icon="icon: arrow-down; ratio: 3.5" uk-scroll></a></h3>
      </div>

    <?php } // BLOCK SINGLE PRODUCTIONS

    elseif( is_singular( 'productions' ) ) { ?>

      <div class="uk-display-block">
        <div class="uk-text-center">
          <h2 class="uk-light uk-heading-xlarge">Producties</h2>
        </div>

        <div class="uk-width-xxlarge uk-margin-auto">
          <h2 class="uk-heading-medium uk-text-center" style="color: #ffff48"><?php the_title(); ?></h2>
        </div>

        <div class="uk-width-xxlarge uk-text-center uk-text-lead uk-light">
          <?php the_excerpt(); ?>
        </div>

        <div class="uk-light uk-text-center">
          <a href="#bs-productions" uk-icon="icon: arrow-down; ratio: 4.5" uk-scroll></a>
        </div>
      </div>

    <?php } ?>

  </div>

</div>
