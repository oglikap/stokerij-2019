<?php get_header(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <div class="uk-section uk-section-muted">
      <div class="uk-container">
        <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
      </div>
    </div>

<?php get_footer(); ?>
