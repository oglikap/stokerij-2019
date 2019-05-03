<?php //* The Query
$exec_query = new WP_Query( array (
'post_type' => 'news',
'posts_per_page' => 4
) );

//* The Loop
if ( $exec_query->have_posts() ) { ?>

  <!-- Nieuws -->
    <div id="bs-news" class="uk-section">
      <!-- <div class="uk-container"> -->
        <h2 class="uk-heading-line uk-text-center"><span>Nieuws</span></h2>

        <div class="uk-card bs-news-item uk-child-width-1-2@s uk-grid-collapse uk-text-center" uk-grid>

          <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post();
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium_large'); ?>

              <div class="uk-card-media-left uk-height-max-large uk-background-cover bs-right-flip" data-src="<?php echo $featured_img_url; ?>" uk-img>

              </div>
              <div class="bs-left-flip">
                <div class="uk-card-body">
                  <h2>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="uk-button uk-button-default">Lees verder</a>
                </div>

              </div>

          <?php
            endwhile; ?>

        </div>

      <!-- </div> -->
    </div>
    <?php
      //* Restore original Post Data
    wp_reset_postdata();}?>
