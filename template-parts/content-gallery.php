<?php
$images = get_field('gallery');

if( $images ): ?>

<div class="uk-section uk-section-muted">
  <div class="uk-container">
    <h2><?php the_title(); ?><span class="bs-color-red"> | Foto's</span></h2>
    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@l" uk-grid uk-lightbox="animation: slide">

      <?php foreach( $images as $image ): ?>

        <div>
            <a class="uk-inline" href="<?php echo $image['url']; ?>" data-caption="<?php echo $image['caption']; ?>">
              <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
        </div>

      <?php endforeach; ?>

    </div>

  </div>
</div>

<?php endif; ?>

</div>
