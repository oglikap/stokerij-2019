<div class="uk-section">
  <div class="uk-container uk-container-small">
    <article class="uk-article">
      <h1 class="uk-article-title uk-text-center"><?php the_title(); ?></h1>
      <span class="uk-text-center uk-text-lead"><?php the_excerpt(); ?></span>

      <?php the_post_thumbnail( 'landscape' ); ?>

      <?php the_content(); ?>

    </article>
  </div>
</div>

<div class="uk-section">
  <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
  
</div>
