<div class="uk-position-relative uk-invisible-hover" uk-slideshow="animation: fade; autoplay: true; pause-on-hover: false" >

  <?php $images = get_field( 'slider' );

  if( $images ): ?>

  <ul class="uk-slideshow-items" uk-height-viewport>

    <?php foreach( $images as $image ): ?>

      <li>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" uk-cover>
        <div class="uk-position-top-left uk-padding-small bs-logo uk-visible@s">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-stokerij.png" alt="De Stokerij Schiedam logo" width="300" />
        </div>

        <div class="uk-position-top-left uk-padding-small bs-logo uk-hidden@s">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-stokerij.png" alt="De Stokerij Schiedam logo" width="200" />
        </div>

        <?php get_template_part( 'template-parts/content', 'nav' ); ?>

        <div class="uk-text-center uk-position-bottom-center bs-slider-content">

          <div class="uk-padding-large">
            <h1 class="uk-heading-large uk-light uk-text-bold uk-text-center bs-color-yellow bs-productions-heading"><?php echo $image['caption']; ?></h1>
            <div class="uk-width-3-5@s uk-text-center uk-margin-auto">
              <p class="uk-text-lead uk-light uk-text-bold"><?php echo $image['description']; ?></p>
            </div>
          </div>
        </div>


      </li>

    <?php endforeach; ?>

  </ul>

   <a class="uk-position-center-left uk-position-small uk-slidenav-large uk-hidden-hover uk-light" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
   <a class="uk-position-center-right uk-position-small uk-slidenav-large uk-hidden-hover uk-light" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

  <?php endif; ?>

</div>
