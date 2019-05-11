
<div class="uk-section">
  <div class="uk-container uk-container-small">
    <h2 class="uk-heading-small"><?php the_title(); ?></h2>
    <?php get_template_part( 'template-parts/content', 'content' ); ?>
  </div>
</div>

<?php get_field( 'template-parts/gallery' ); ?>
