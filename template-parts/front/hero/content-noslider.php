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
        <div class="uk-margin-large-bottom uk-margin-top bs-slogan">
          <p class="uk-margin-auto uk-text-uppercase">
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

        <div class="uk-production-quote uk-margin-auto">
          <h2 class="uk-text-center uk-heading-medium bs-productions-heading" style="color: #ffff48; font-variant: all-small-caps; line-height: .75"><?php the_title(); ?></h2>
        </div>

        <div class="uk-text-center uk-text-lead uk-light bs-production-quote">
          <?php the_excerpt(); ?>
        </div>

        <?php get_template_part( 'template-parts/content', 'topdown' ); ?>

      </div>

    <?php } elseif // BLOCK OPSTOKERIJ
    ( is_singular('opstokerij') ) { ?>
      <div class="uk-padding-large uk-light uk-text-center uk-text-bold">
        <h2 class="uk-heading-xsmall uk-text-uppercase">De Stokerij en Theater aan de Schie presenteren</h2>
        <h1 class="uk-heading-large uk-margin-large-bottom"><span style="color: #ea6623">THEATERFESTIVAL</span><br />DE OPSTOKERIJ</h1>
      </div>

    <?php } elseif // BLOCK JONGE STOKERIJ
    ( is_page('jonge-stokerij') ) { ?>

      <div class="uk-display-block">
        <h2 class="uk-heading-large uk-light uk-text-center"><?php the_title(); ?></h2>
        <p class="uk-text-lead uk-text-center uk-light bs-production-quote">
          De presentaties zullen variëren van klein (enkel voor de ouders) tot deelname aan de professionele voorstellingen of films van de Stokerij zelf.
        </p>
        <?php get_template_part( 'template-parts/content', 'topdown' ); ?>
      </div>

    <?php } elseif // BLOCK 'OVER'
    ( is_page( 'over' ) ) { ?>

      <div class="uk-display-block">
        <h2 class="uk-heading-large uk-light uk-text-center"><span class="bs-color-yellow">Over</span> De Stokerij</h2>
        <p class="uk-text-lead uk-text-center uk-light bs-production-quote">
          Schiedam is de standplaats en broedplaats van ons stadsgezelschap, waar we over vier jaar niet meer weg te denken zijn en waar we ons als makers middenin de samenleving plaatsen.
        </p>
        <?php get_template_part( 'template-parts/content', 'topdown' ); ?>
      </div>

    <?php } ?>

  </div>

</div>
