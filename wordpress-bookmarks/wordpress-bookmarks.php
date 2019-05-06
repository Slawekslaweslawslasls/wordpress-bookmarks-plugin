<?php
/*

Wordpress Bookmarks

Set bookmarks to your favorite posts within the WordPress admin

Plugin Name: Wordpress Bookmarks
Plugin URI: https://slawek.dev
Description: Set bookmarks to your favorite posts within the WordPress admin.f
Version: 1.0
Author: Slawek Bezborodov <slawek@slawek.dev>
Author URI: https://slawek.dev
*/

// If this file is called directly, abort.
	if (!defined('WPINC')) {
		die;
	}

	function activate_wp_bookmarks(){

		require_once plugin_dir_path(__FILE__) . 'classes/class-wp_bookmarks-activate.php';
		CBXWPBookmark_Activator::activate(); //db table creates
		CBXWPBookmark_Activator::cbxbookmark_create_pages(); //create the shortcode page

	}