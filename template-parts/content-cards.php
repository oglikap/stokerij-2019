
  <!-- <//?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?> -->

  <div class="bs-resume-header-frame">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('portrait'); ?>
      <div class="bs-resume-header uk-light">
        <div class="uk-flex uk-flex-bottom uk-flex-center" style="height: 90%;">
          <?php the_title(); ?>
        </div>
      </div>
    </a>
  </div>
