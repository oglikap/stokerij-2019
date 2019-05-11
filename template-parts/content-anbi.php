<?php
  $uittreksel = get_field('uittreksel');
  $statuut = get_field('statuten');

  if( $uittreksel || $statuut ): ?>
  <div class="uk-section uk-section-muted">
    <div class="uk-container uk-text-center">

      <div class="uk-child-width-1-3@l uk-grid-divider" uk-grid>
        <div>
          <h3 class="bs-color-red">Uittreksel KvK</h3>
          <a class="uk-button uk-button-default uk-button-small" href="<?php echo $uittreksel['url']; ?>"><?php echo $uittreksel['title']; ?></a>
        </div>

        <div>
          <h3 class="bs-color-red">Statuten</h3>
          <a class="uk-button uk-button-default" href="<?php echo $statuut['url']; ?>"><?php echo $statuut['title']; ?></a>
        </div>

        <?php if( have_rows('downloads') ): ?>

          <div>
            <h3 class="bs-color-red">Jaarverslagen</h3>

            <div>

              <?php while( have_rows('downloads') ): the_row(); ?>

              <?php $link = get_sub_field('link');
              if( $link ): ?>
                <button class="uk-button uk-button-default uk-margin-small-bottom" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></button>
              <?php endif; ?>
              <?php endwhile; ?>

            </div>
          </div>

        <?php endif; ?>

      </div>

    </div>
  </div>

<?php endif; ?>
