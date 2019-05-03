<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <div class="uk-section">
      <div class="uk-container">
        <h2><?php the_title(); ?></h2>        
      </div>
    </div>
    <?php get_template_part( 'template-parts/content' ); ?>
  <?php endwhile; ?>
This is the index file
<?php get_footer(); ?>
