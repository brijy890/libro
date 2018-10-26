<?php
  // Theme Support
  function libro_theme_setup(){
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme','libro_theme_setup');
// Excerpt Length Control
function set_excerpt_length(){
  return 45;
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

