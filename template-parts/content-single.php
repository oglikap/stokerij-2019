<div class="uk-section">
  <?php if( !is_page( 'jonge-stokerij' && !is_page('over') ) ) { ?><h1 style="width: 80%;line-height: 1" class="bs-color-red uk-heading-medium uk-text-center uk-margin-auto"><?php if( is_page('speellijst') ) { echo "Agenda"; } else { the_title(); } ?></h1><?php } ?>
  <div class="uk-container uk-container-small">
    <div class="uk-padding-small uk-padding-remove-top">

      <?php if( !is_page('jonge-stokerij') && !is_page('over') ) { ?>
      <div class="uk-align-left">
      <?php the_post_thumbnail('portrait'); ?>
      </div>
      <?php } ?>

      <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

        <div class="bs-content" id="bs-content">
          <?php the_content(); ?>
        </div>

      <?php endwhile; endif; ?>

    </div>
  </div>
</div>
