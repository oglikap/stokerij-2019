<?php

// Add scripts and stylesheets
function stokerij_scripts() {
  // wp_enqueue_style( 'uikit_css_core', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit-core.min.css' );
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit.min.css' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );

  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uikit_icons', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit-icons.min.js' );
  wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'stokerij_scripts');

// Wordpress titles
add_theme_support( 'title-tag' );

// Add menu support
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

// Custom menu
function wpb_stokerij_menu() {
  register_nav_menu('stokerij-menu',__('Stokerij Menu'));
}
add_action( 'init', 'wpb_stokerij_menu');

// Featured image
add_theme_support( 'post-thumbnails');
add_post_type_support( 'productions', 'thumbnail' );

add_image_size( 'square', 250, 250, true );
add_image_size( 'square-medium', 400, 400, true );
add_image_size( 'square-big', 500, 500, true );
add_image_size( 'square-thmb', 150, 150, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'portrait', 400, 566, true );
add_image_size( 'landscape', 1000, 600, true );
add_image_size( 'very-small', 100, 9999 );
add_image_size( 'hvrbox', 250, 400, true );
add_image_size( 'spotlight', 600, 400, true );

// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// Excerpt length
function my_excerpt_length( $length ) {
      return 32;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
remove_filter( 'menu_order', 'custom_menu_order' );

function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 4', 'twentysixteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 5', 'twentysixteen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

/* Logo support */
add_theme_support( 'custom-logo', array(
	'height'      => 240, // set to your dimensions
	'width'       => 240,
	'flex-height' => true,
	'flex-width'  => true,
) );

/* Add custom Post Types */
function create_custom_post_types() {
  register_post_type( 'productions',
    array(
      'labels' => array(
        'name' => __( 'Producties' ),
        'singular_name' => __( 'Productie' ),
        'add_new' => __( 'Nieuwe productie' ),
        'add_new_item' => __( 'Nieuwe productie toevoegen' ),
        'new_item' => __( 'Nieuwe Productie' ),
		    'view_item' => __( 'Bekijk Productie' ),
		    'search_items' => __( 'Zoek Producties' ),
		    'not_found' =>  __( 'Geen Productie gevonden' ),
		    'not_found_in_trash' => __( 'Niks gevonden in prullenbak' ),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'producties' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
      'taxonomies' => array( 'post_tag', 'category' ),
    )
  );

  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'Nieuws' ),
        'singular_name' => __( 'Nieuws' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'nieuws' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
      'taxonomies' => array( 'post_tag', 'category' ),
    )
  );
}
add_action( 'init', 'create_custom_post_types' );
