<?php
/*
Plugin Name: Block Pinterest
Plugin URI: http://wordpress.org/extend/plugins/block-pinterest/
Description: Adds the required meta tags to stop your blog and image content appearing on Pinterest
Author: Liam Gladdy
Version: 1.0
Author URI: http://www.twitter.com/lgladdy
*/

add_action('wp_head', 'add_block');

function add_block() {
	echo '<meta name="pinterest" content="nopin" />';
}

?>
