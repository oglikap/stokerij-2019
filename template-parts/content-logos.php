<?php $images = get_field('gallery');

if( $images ): ?>

<div id="logos" class="uk-section">
  <!-- <hr style="padding: 0; margin-top: 0" /> -->
  <div class="uk-container uk-container-small">
    <h2 class="uk-padding-small uk-heading-line uk-text-center"><span><span class="bs-color-red">De Stokerij</span> wordt mede mogelijk gemaakt door:</span></h2>
    <div class="uk-child-width-1-3 uk-child-width-1-6@s" uk-grid>

        <?php foreach( $images as $image ): ?>

          <div>
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>

        <?php endforeach; ?>

    </div>

  </div>
</div>

<?php endif; ?>
