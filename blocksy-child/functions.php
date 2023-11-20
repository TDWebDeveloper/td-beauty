<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

/*	Add New Stylesheet	*/        
add_action( 'wp_enqueue_scripts', 'childtheme_sass_styles');
function childtheme_sass_styles() {
 // enqueue style
 wp_register_style('style-sass', get_template_directory_uri().'-child/css/style.css');
 wp_enqueue_style('style-sass');
}