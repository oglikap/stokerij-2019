<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <div class="bs-content" id="bs-content">
    <?php the_content(); ?>
  </div>

<?php endwhile; endif; ?>
