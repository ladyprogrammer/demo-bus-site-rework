<?php 
/**
Plugin Name: Bus Ticket Booking
Description: Bus ticketing, booking and seat reservation
Version: 1.0
Author: Gemma Baltazar
License: GPLv2 or later
Text Domain: bus-booking
*/


// info
// pick seat
// payment
// paymaya

require plugin_dir_path( __FILE__ ) . 'bus-search-form.php';
require plugin_dir_path( __FILE__ ) . 'bus-selection.php';
require plugin_dir_path( __FILE__ ) . 'bus-pick-seat.php';
require plugin_dir_path( __FILE__ ) . 'bus-seat-payment.php';


function bus_activate_plugin() {
	// TODO
	error_log('ACTIVATE PLUGIN: create db tables here');
}
register_activation_hook(__FILE__, 'bus_activate_plugin');


function bus_deactivate_plugin() {
	// TODO
	error_log('DEACTIVATE PLUGIN: just remove temp files');
}
register_deactivation_hook(__FILE__, 'bus_deactivate_plugin');


function bus_uninstall_plugin() {
	// TODO
	error_log('UNINSTALL PLUGIN: clean up everything');
}
register_uninstall_hook(__FILE__, 'bus_uninstall_plugin');