<div class="uk-section">
  <div class="uk-container">

    <div class="uk-article">
      <h2 class="uk-article-title uk-text-center"><?php the_title(); ?></h2>
      <span class="uk-text-lead uk-text-center"><?php the_excerpt(); ?></span>
      <?php the_content(); ?>
      <?php the_post_thumbnail('portrait'); echo '<br />'; the_post_thumbnail_caption(); ?>
    </div>

  </div>
</div>

<?php get_template_part( 'template-parts/content', 'gallery' ); ?>

<div class="uk-section">
  <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
</div>
