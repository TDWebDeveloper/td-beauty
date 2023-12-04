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
/*	Add New JavaScript	*/
function enqueue_scripts_child_theme(){
   wp_enqueue_script( 'text', get_stylesheet_directory_uri() . '/js/text.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_child_theme');
/*	LatePoint	*/
function latepoint_text_validation(){
	echo '<div class="os-col-12"><h3 class="latepoint-desc-title titulo-cancellation">Cancellation Policy</h3>
	<p class="desc-cancellation">If you need to cancel or reschedule your appointment please let us know 24 hours prior otherwise the full treatment cost will be charged to the card on file.</p></div>';
}
add_action('latepoint_booking_steps_contact_after','latepoint_text_validation', 5);
