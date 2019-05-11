<?php get_header(); ?>

<div class="uk-section">
  <h2 class="uk-position-top-center uk-margin-large-top uk-heading-large uk-visible@s">Alle producties</h2>
  <h2 class="uk-position-top-center uk-heading-medium uk-hidden@s" style="top: 5%">Alle producties</h2>
  <div class="uk-container uk-margin-small-top">
    <h2 class="uk-heading-line uk-text-center bs-subtitle"><span>Huidige en komende producties</span></h2>

    <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-5@m uk-grid-small bs-productions-grid" uk-grid='masonry: true'>

      <?php //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => array('productions', 'opstokerij'),
      //  'job_role'  => 'executive',
      'posts_per_page' => -1,
      'cat' => 13
      ) );

      //* The Loop
      if ( $exec_query->have_posts() ) { ?>

        <?php
        while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
        <div>
          <h3>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <a href="<?php the_permalink(); ?>" class="">
            <?php the_post_thumbnail('square'); ?>
          </a>
          <p class="uk-text-meta uk-text-center uk-grid-margin-small"><?php echo strip_tags(get_the_excerpt()); ?></p>
        </div>
       <?php
          endwhile; ?>
        <?php
          //* Restore original Post Data
        wp_reset_postdata();}?>

    </div>
    <h2 class="uk-heading-line uk-text-center bs-subtitle"><span>Eerdere Producties</span></h2>


    <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-5@l uk-grid-small bs-productions-grid" uk-grid="masonry: true">
      <?php //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => array('productions', 'opstokerij'),
      //  'job_role'  => 'executive',
      'posts_per_page' => -1,
      'cat' => 14
      ) );

      //* The Loop
      if ( $exec_query->have_posts() ) { ?>

      <!-- <ul class="query"> -->
        <?php
        while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
        <div>
          <h3>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <a href="<?php the_permalink(); ?>" class="">
            <?php the_post_thumbnail('square'); ?>
          </a>
          <?php the_excerpt(); ?>
        </div>
       <?php
          endwhile; ?>
        <?php
          //* Restore original Post Data
        wp_reset_postdata();}?>
    </div>



  </div>
</div>







    </div>
  </section>
</article>

<?php get_footer(); ?>
