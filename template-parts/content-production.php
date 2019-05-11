<?php if( get_field('background_img') ) { ?>


<div class="uk-section">
  <div class="uk-container uk-container-small">

      <?php get_template_part( 'template-parts/content', 'content' ); ?>


      </div>
    </div>
  <?php } else {
    get_template_part( 'template-parts/content', 'single' ); }
   ?>
      <?php get_template_part( 'template-parts/content', 'gallery' ); ?>

    <div class="uk-section">
      <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
    </div>
