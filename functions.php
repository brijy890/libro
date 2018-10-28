<?php
// Theme Support
function libro_theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','libro_theme_setup');

/**
 * Proper way to enqueue scripts and styles
 */
function libro_scripts() {
	// Styles
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800' );
	wp_enqueue_style( 'google-font-display', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i' );
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'ionicons.min', get_template_directory_uri() . '/css/ionicons.min.css' );
	wp_enqueue_style( 'bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css' );
	wp_enqueue_style( 'jquery.timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // Js
    wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js' );
    wp_enqueue_script( 'jquery-migrate-3.0.1.min', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js' );
    wp_enqueue_script( 'popper.min.js', get_template_directory_uri() . '/js/popper.min.js' );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/js/jquery.easing.1.3.js' );
    wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() . '/js/jquery.waypoints.min.js' );
    wp_enqueue_script( 'jquery.stellar.min', get_template_directory_uri() . '/js/jquery.stellar.min.js' );
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js' );
    wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' );
    wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/js/aos.js' );
    wp_enqueue_script( 'jquery.animateNumber.min', get_template_directory_uri() . '/js/jquery.animateNumber.min.js' );
    wp_enqueue_script( 'scrollax.min', get_template_directory_uri() . '/js/scrollax.min.js' );
    wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js' );
    wp_enqueue_script( 'jquery.timepicker.min', get_template_directory_uri() . '/js/jquery.timepicker.min.js' );
    wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false' );
    wp_enqueue_script( 'google-map', get_template_directory_uri() . '/js/google-map.js' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' , array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'libro_scripts' );

// Excerpt Length Control
function set_excerpt_length(){
  return 25;
}
add_filter('excerpt_length', 'set_excerpt_length');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Get customizer file
require get_template_directory().'/inc/customizer.php';

