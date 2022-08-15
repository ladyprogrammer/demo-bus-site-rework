<?php 
/**
Plugin Name: Bus Ticket Booking
Description: Bus ticketing, booking and seat reservation
Version: 1.0
Author: Gemma Baltazar
License: GPLv2 or later
Text Domain: bus-booking
*/


//How to Disable WordPress Deprecated Warnings
add_filter('deprecated_function_trigger_error', 'disable_all_deprecated_warnings');
add_filter('deprecated_argument_trigger_error', 'disable_all_deprecated_warnings');
add_filter('deprecated_file_trigger_error',     'disable_all_deprecated_warnings');

//Not to trigger any errors when a deprecated function or method is called.
add_filter( 'deprecated_hook_trigger_error',    'disable_all_deprecated_warnings');

function disable_all_deprecated_warnings($bolean) {
    return false;
}

require plugin_dir_path( __FILE__ ) . 'bus-search-form.php';
require plugin_dir_path( __FILE__ ) . 'bus-selection.php';
require plugin_dir_path( __FILE__ ) . 'bus-pick-seat.php';
require plugin_dir_path( __FILE__ ) . 'bus-seat-payment.php';


function bus_scripts() {
	if ( is_page(array( 'home' )) ) {

		// stylesheets
		wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap');
		wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap');
		wp_enqueue_style('icomoon-fonts', '/assets/fonts/icomoon/style.css');
		wp_enqueue_style('rome', '/assets/css/rome.css');
		wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
		wp_enqueue_style('bus-ticketing', '/assets/css/style.css');

		// javascripts
		wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js');
		wp_enqueue_script('popper', '/assets/js/popper.min.js');
		wp_enqueue_script('rome', '/assets/js/rome.js');
		wp_enqueue_script('bus-ticketing', '/assets/js/bus-ticketing.js');
	}
}
add_action('wp_enqueue_scripts', 'bus_scripts');


// function bus_activate_plugin() {
// 	// TODO
// 	error_log('ACTIVATE PLUGIN: create db tables here');
// }
// register_activation_hook(__FILE__, 'bus_activate_plugin');


// function bus_deactivate_plugin() {
// 	// TODO
// 	error_log('DEACTIVATE PLUGIN: just remove temp files');
// }
// register_deactivation_hook(__FILE__, 'bus_deactivate_plugin');


// function bus_uninstall_plugin() {
// 	// TODO
// 	error_log('UNINSTALL PLUGIN: clean up everything');
// }
// register_uninstall_hook(__FILE__, 'bus_uninstall_plugin');