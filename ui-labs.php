<?php
/*
Plugin Name: UI Labs
Plugin URI: 
Description: Experimental WordPress admin UI features, ooo shiny!
Author: John O'Nolan
Version: 1.1.2
Author URI: http://john.onolan.org
*/

/**
 * Modify the output of post statuses
 *
 * Allows for fine-grained control of styles and targetin protected
 * posts, written by Pete Mall
 *
 * @since 1.0.1
 */
function labs_display_post_states( $post_states ) {
   foreach ( $post_states as &$post_state )
       $post_state = '<span class="' . strtolower( str_replace( ' ', '-', $post_state ) ) . '">' . $post_state . '</span>';
   return $post_states;
}

add_filter( 'display_post_states', 'labs_display_post_states' );


/**
 * Add custom settings page
 *
 * Allows experiments to be turned on/off, written by Ollie Read
 *
 * @since 1.1
 */
function ui_labs_init() {
	ui_labs_register_settings();
	if(get_option('poststatuses') == 'yes') {
		wp_register_style('ui-labs-poststatuses', plugins_url('/ui-labs/1-poststatuses.css'), false, '9001');
		wp_enqueue_style('ui-labs-poststatuses');
	}
	if(get_option('adminbar') == 'yes') {
		wp_register_style('ui-labs-adminbar', plugins_url('/ui-labs/2-adminbar.css'), false, '9001');
		wp_enqueue_style('ui-labs-adminbar');
	}
}

function ui_labs_settings() {
	add_options_page('UI Labs', 'UI Labs', 'manage_options', 'ui-labs-settings', 'ui_labs_settings_page');
}

function ui_labs_register_settings() {
	register_setting('ui-labs', 'poststatuses');
	register_setting('ui-labs', 'adminbar');
}

function ui_labs_settings_page() { require_once('settings.php'); }

function ui_labs_activation() {
	ui_labs_register_settings();
	update_option('poststatuses', 'yes');
	update_option('adminbar', 'yes');
}

if(is_admin()) {
	add_action('admin_init', 'ui_labs_init');
	add_action('admin_menu', 'ui_labs_settings');
}

register_activation_hook(__FILE__, 'ui_labs_activation');

?>
