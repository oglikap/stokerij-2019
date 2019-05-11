<?php if( have_rows('blocks') ): ?>

<div id="bs-social" class="uk-section">

  <?php while( have_rows('blocks') ): the_row(); ?>

    <div class="uk-container">

      <h2 class="uk-heading-line uk-text-center uk-heading-medium bs-color-red"><span>Facebook</span></h2>

      <div class="uk-flex uk-flex-center">
        <?php if( get_sub_field('facebook') ): the_sub_field('facebook'); endif; ?>

      </div>

      <h2 class="uk-heading-line uk-heading-medium uk-text-center bs-color-red"><span>Instagram</span></h2>

      <?php echo wdi_feed(array('id'=>'1')); ?>

    </div>

  <?php endwhile; ?><!-- have_rows('blocks') -->

</div>

<?php endif; ?>
