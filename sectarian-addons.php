<?php
/**
 * Plugin Name: Sectarian Addons
 * Description: Sectarian addons widgets for Elementor.
 * Version:     1.0.3
 * Author:      Elementor Developer
 * Author URI:  https://codesectarian.com/
 * Text Domain: codesectarian
 */


function register_widget_styles() {
	wp_register_style( 'widget-banner-styles', plugins_url( 'public/src/css/widget-banner-styles.css', __FILE__ ) );
	wp_register_style( 'widget-timeline-styles', plugins_url( 'public/src/css/widget-timeline-styles.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'register_widget_styles' );


function register_widget_scripts()
{
    wp_register_script( 'widget-banner-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js' );
}
add_action( 'wp_enqueue_scripts', 'register_widget_scripts' );


function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/public/widgets/banner-parallax.php' );
	require_once( __DIR__ . '/public/widgets/timeline.php' );

	$widgets_manager->register( new \Elementor_Banner_Parallax() );
	$widgets_manager->register( new \Elementor_Timeline() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );

