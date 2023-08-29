<?php
/**
 * Plugin Name: Sectarian Addons
 * Description: Sectarian addons widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://codesectarian.com/
 * Text Domain: codesectarian
 */

function register_widget_styles() {
	wp_register_style( 'widget-banner-styles', plugins_url( 'public/src/css/widget-banner-styles.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'register_widget_styles' );

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/public/widgets/banner-parallax.php' );

	// $widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Banner_Parallax() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );

