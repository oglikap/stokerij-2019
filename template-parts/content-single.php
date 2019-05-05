<h1 class="uk-heading-medium uk-position-top-center uk-text-center"><?php the_title(); ?></h1>

<div class="uk-section">
  <div class="uk-container uk-container-small">
    <article class="uk-article">
      <!-- <span class="uk-text-center uk-text-lead"><//?php the_excerpt(); ?></span> -->

      <?php the_post_thumbnail( 'landscape' ); ?>

      <?php get_template_part( 'template-parts/content', 'content' ); ?>

    </article>
  </div>
</div>

<?php get_template_part( 'template-parts/content', 'gallery' ); ?>

<!-- <div class="uk-section">
  <//?php get_template_part( 'template-parts/content', 'prev-next' ); ?>

</div> -->
