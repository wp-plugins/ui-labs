<?php
/*
Plugin Name: UI Labs
Plugin URI: 
Description: Experimental WordPress admin UI features, ooo shiny!
Author: John O'Nolan
Version: 1.0
Author URI: http://john.onolan.org
*/

/**
 * Add CSS file link
 * Based on the WP Admin Theme plugin by David Smith
 */
function ui_labs_css() {
	$url = plugins_url('/ui-labs.css', __FILE__);
    echo '
    <link rel="stylesheet" type="text/css" href="' . $url . '" />
    <link rel="stylesheet" href="/wp-admin/css/upload.css" type="text/css" />
    ';
}

add_action('admin_head','ui_labs_css', 1000);

?>
