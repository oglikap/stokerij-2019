  <!-- <//?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?> -->
  <div class="bs-resume-header-frame">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('portrait'); ?>
      <div class="bs-resume-header uk-light">
        <div class="uk-flex uk-flex-middle uk-flex-center">
          <h3 class="uk-heading-xsmall bs-productions-heading"><?php the_title(); ?></h3>
        </div>
      </div>
    </a>
  </div>
