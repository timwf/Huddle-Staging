<?php
// Adds CSS
function theme_styles() {
  //  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style( 'slickCSS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/css/style.min.css', array(), rand(111,9999), 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');


// Add JS
function theme_js() {
  wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('jquery');

  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js', '', '3.3.1', true);
  wp_enqueue_script( 'gsapScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js', '', '3.3.1', true);
  wp_enqueue_script( 'libs', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '1.8.1', true);
  // wp_enqueue_script( 'googleMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAzN5dcRJ_NejVDTQihy1ExJaBZmAq4IVc&callback=initMap', '', '1.8.1', true);



  wp_deregister_script('wp-mediaelement');
  wp_deregister_style('wp-mediaelement');
}
add_action( 'wp_enqueue_scripts', 'theme_js');

// Add backend styles for Gutenberg.
add_action( 'enqueue_block_editor_assets', 'theme_add_gutenberg_assets' );
function theme_add_gutenberg_assets() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'theme-gutenberg', get_template_directory_uri() . '/css/custom-editor-styles.css', false );
}


// Custom login
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Remove embed script
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// Remove all emoji scripts and styles from the frontend and admin
function removeEmojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action('init', 'removeEmojis');




