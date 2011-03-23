<?php
/*
Plugin Name: UI Labs
Plugin URI: 
Description: Experimental WordPress admin UI features, ooo shiny!
Author: John O'Nolan
Version: 1.0.1
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
 * Add CSS file link
 *
 * Based on the WP Admin Theme plugin by David Smith
 *
 * @since 1.0
 */
function ui_labs_css() {
	$url = plugins_url('/ui-labs.css', __FILE__);
    echo '
    <link rel="stylesheet" type="text/css" href="' . $url . '" />
    ';
}

add_action('admin_head','ui_labs_css', 1000);

?>
