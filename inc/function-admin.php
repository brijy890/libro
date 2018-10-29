<?php

/*
	========================
			ADMIN PAGE
	========================
*/

function libro_add_admin_page() {
	// generate admin page
	add_menu_page( 'Libro Theme Options', 'Libro', 'manage_options', 'brij_libro', 'libro_theme_create_page', '
dashicons-admin-customizer', 82);

	// generate admin sub pages
	add_submenu_page( 'brij_libro', 'Libro Theme Options', 'General', 'manage_options', 'brij_libro', 'libro_theme_create_page' );
	add_submenu_page( 'brij_libro', 'Libro Slider', 'Slider', 'manage_options', 'libro_slider', 'libro_theme_create_slider' );

	// Activate custom settings
	add_action( 'admin_init', 'libro_custom_settings' );
}
add_action( 'admin_menu', 'libro_add_admin_page' );

function libro_custom_settings() {
	register_setting( 'libro-settings-group', 'slider_content' );
	add_settings_section( 'libro-slider-options', 'Slider Options', 'libro_slider_options', 'brij_libro' );
	add_settings_field( 'libro-slider', 'Slider Content', 'libro_slider_content', 'brij_libro', 'libro-slider-options' );
}

function libro_slider_content() {
	$sliderContent = esc_attr( get_option( 'slider_content' ) );
	echo '<textarea name="slider_content" placeholder="Add Slider Content" rows="10" cols="50">'.$sliderContent.'</textarea>';
}

function libro_slider_options() {
	echo "Customize slider options";
}

function libro_theme_create_page() {
	// generation of admin page
	require_once( get_template_directory() . '/inc/templates/libro-admin.php');
}

function libro_theme_create_slider() {

}