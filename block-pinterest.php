<?php
/*
Plugin Name: Block Pinterest
Plugin URI: http://wordpress.org/extend/plugins/block-pinterest/
Description: Adds the required meta tags to stop your blog and image content appearing on Pinterest
Author: Liam Gladdy
Version: 1.0.5
Author URI: http://www.twitter.com/lgladdy
*/

add_action('wp_head', 'add_block');

function add_block() {
	echo '<meta name="pinterest" content="nopin" />';
}

$plugin_slug = plugin_basename( __FILE__ );
add_filter( 'configure_link_' . $plugin_slug, 'return_configuration_link', 10, 1);

function return_configuration_link( $link ) {
	return '/wp-admin/plugins.php';
}
?>