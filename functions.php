<?php 

// Show title in browser tab
if ( ! function_exists( 'php_setup' ) ) {
  function php_setup() {
    add_theme_support( 'title-tag' );
  }
}
add_action( 'after_setup_theme', 'php_setup' );

// Add styles
function enqueue_php_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'twentynineteen',  get_template_directory_uri() . '/style.css', 'style' );
  wp_enqueue_style( 'bootstrap',  get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', 'twentynineteen' );
  wp_enqueue_style( 'php',  get_stylesheet_directory_uri() . '/assets/css/php.css', 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_php_style' );

// Create Topic-taxonomy
function create_taxonomy(){
	register_taxonomy( 'topic', 'post', [
		'label' => __('Topic', 'post' ), 
		'rewrite' => [ 'slug' => 'topic'],
		'show_in_rest' => true, 
    ] );
}
add_action( 'init', 'create_taxonomy' );