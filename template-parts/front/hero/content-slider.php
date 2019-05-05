<div uk-slideshow="animation: fade; autoplay: true; pause-on-hover: false">

  <?php $images = get_field( 'slider' );

  if( $images ): ?>

  <ul class="uk-slideshow-items" uk-height-viewport>

    <?php foreach( $images as $image ): ?>

      <li>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" uk-cover>

        <div class="uk-position-center" style="bottom: 50%; opacity: .8">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-stokerij.png" alt="De Stokerij Schiedam logo" width="400" />

        </div>
        <div class="uk-position-bottom-center" style="bottom: 15%;">
          <h1 class="uk-heading-hero uk-light uk-text-bold"><?php echo $image['caption']; ?></h1>
        </div>

      </li>

    <?php endforeach; ?>

  </ul>

   <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-light" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
   <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-light" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

  <?php endif; ?>

</div>
