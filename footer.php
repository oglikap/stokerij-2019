<div class="uk-section uk-section-secondary">
  <div class="uk-container">

    <!-- Footer -->
      <footer id="footer">

        <?php
        if ( is_active_sidebar( 'sidebar-2' ) ||
           is_active_sidebar( 'sidebar-3' ) ||
           is_active_sidebar( 'sidebar-4' ) ||
           is_active_sidebar( 'sidebar-5' )):
        ?>

          <aside class="widget-area uk-child-width-1-2@s" uk-grid role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
            <?php
            if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
              <div class="widget-column footer-widget-1">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
              </div>
            <?php }
            if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
              <div class="widget-column footer-widget-2">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
              </div>
            <?php }
             ?>

          </aside><!-- .widget-area -->

        <?php endif; ?>
        <hr>
        <ul class="bs-social uk-flex uk-flex-center">
          <li><a href="https://www.facebook.com/stokerijsdam/" uk-icon="icon: facebook; ratio: 1.5"></a></li>
          <li><a href="https://www.instagram.com/stokerijschiedam/" uk-icon="icon: instagram"></a></li>
          <li><a href="mailto:info@destokerijschiedam.nl" uk-icon="icon: mail"></a></li>
        </ul>
        <!-- Copyright -->
        <ul class="uk-flex uk-flex-center uk-flex-middle">
          <li><?php echo date('Y') . '' ;?> &copy; Stichting De Stokerij Schiedam | </li>
          <li>Wennekerpand - Vijgensteeg 2, 3111 PT Schiedam | </li>
          <li>Galvanistraat 13, 3112EA Schiedam</li>
        </ul>
      </footer>

  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
