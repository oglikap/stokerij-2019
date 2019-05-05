<?php //* The Query
$exec_query = new WP_Query( array (
'post_type' => array( 'productions', 'opstokerij'),
'posts_per_page' => -1,
'cat' => 15,
'order' => 'ASC'
) ); ?>

  <div class="uk-section" id="bs-productions">
    <div class="uk-container uk-text-center">
      <?php //* The Loop
      if ( $exec_query->have_posts() ) { ?>
      <h2 class="uk-heading-line"><span>Producties</span></h2>
      <h3 style="color:#2e3842">2018/2019</h3>
      <hr class="uk-divider-small" />
      <div class="uk-child-width-1-2 uk-child-width-1-4@l uk-grid-small" uk-grid>
        <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post();

            get_template_part( 'template-parts/content', 'cards' );

          endwhile; ?>

      </div>
      <?php
        //* Restore original Post Data
      wp_reset_postdata();}?>


      <?php //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => array( 'productions', 'opstokerij'),
      'posts_per_page' => -1,
      'cat' => ('13, -15, -18')
      ) );

      //* The Loop
      if ( $exec_query->have_posts() ) { ?>

      <h3 style="color:#2e3842;margin-top:1em;">Op tournee</h3>
      <hr class="uk-divider-small" />

      <div class="uk-child-width-1-2 uk-child-width-1-4@l uk-grid-small uk-flex-center" uk-grid>
        <?php
        while ( $exec_query->have_posts() ): $exec_query->the_post();

         get_template_part( 'template-parts/content', 'cards' );

        endwhile; ?>
      </div><!-- uk-grid -->

      <?php
        //* Restore original Post Data
      wp_reset_postdata();}?>

     <!-- SEIZOEN 2019/2020 -->

     <?php //* The Query
     $exec_query = new WP_Query( array (
     'post_type' => array( 'productions', 'opstokerij'),
     'posts_per_page' => -1,
     'cat' => 18
     ) );

     //* The Loop
     if ( $exec_query->have_posts() ) { ?>
       <h3 class="uk-text-center" style="color:#2e3842;margin-top:1em;">Verwacht! 2019/2020</h3>
       <hr class="uk-divider-small uk-text-center" />

       <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small uk-flex-center" uk-grid>

         <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post();
            get_template_part( 'template-parts/content', 'cards' );
           endwhile; ?>

       </div><!-- uk-grid -->

         <?php
           //* Restore original Post Data
         wp_reset_postdata();}?>
      </div>
    </div>
