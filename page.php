<?php
/**
* The template for displaying a single page.
*
* @package WordPress
* @subpackage Stokerij
* @since Stokerij 1.1
*/

get_header();

get_template_part( 'template-parts/content', 'single' );

if( is_page('anbi') ) {
  get_template_part( 'template-parts/content', 'anbi' );
}

if ( is_page( 'jonge-stokerij' ) ) {
  get_template_part( 'template-parts/content', 'gallery' );
}

if( is_page( 'over' ) ) {
  get_template_part( 'template-parts/content', 'logos' );
}

get_footer(); ?>
