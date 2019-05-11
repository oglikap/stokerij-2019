<?php get_template_part( 'template-parts/content', 'nav' ); ?>


<h1 class="uk-heading-large uk-position-top-center uk-padding-small">Producties</h1>
<h2 class="uk-heading-medium uk-text-center uk-width-xxlarge uk-padding-small uk-margin-auto"><?php the_title(); ?></h1>
<div class="uk-height-small"></div>
<div class="uk-section uk-section-muted uk-text-center">
  <div class="uk-container">
    <div class="" uk-grid>
      <div class="uk-width-2-5">
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>
        <div class="uk-height-large uk-background-cover" data-src="<?php echo $featured_img_url; ?>" uk-img>
        </div>
      </div>
      <div class="uk-width-3-5">
        <?php the_excerpt(); ?>
      </div>
    </div>


    </div>

</div>
