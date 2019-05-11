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


	defined('WP_BOOKMARKS_PLUGIN_NAME') or define('WP_BOOKMARKS_PLUGIN_NAME', 'Wordpress Bookmarks');
	defined('WP_BOOKMARKS_PLUGIN_VERSION') or define('WP_BOOKMARKS_PLUGIN_VERSION', '1.0');

	function activate_wp_bookmarks(){
		require_once plugin_dir_path(__FILE__) . 'classes/class-wp_bookmarks-activate.php';
		wp_bookmarks_activate::activate(); //db table creates
		//CBXWPBookmark_Activator::cbxbookmark_create_pages(); //create the shortcode page
	}

	function deactivate_wp_bookmarks(){
		require_once plugin_dir_path(__FILE__) . 'classes/class-wp_bookmarks-deactivate.php';
		wp_bookmarks_deactivate::deactivate();
	}

	/**
	 * The code that runs during plugin uninstall.
	 * This action is documented in includes/class-cbxwpbookmark-uninstall.php
	 */
	function uninstall_wp_bookmarks(){
		require_once plugin_dir_path(__FILE__) . 'classes/class-wp_bookmarks-uninstall.php';
		wp_bookmarks_uninstall::uninstall();
	}

	register_activation_hook(__FILE__, 'activate_wp_bookmarks');
	register_deactivation_hook(__FILE__, 'deactivate_wp_bookmarks');
	register_uninstall_hook(__FILE__, 'uninstall_wp_bookmarks');

	require plugin_dir_path(__FILE__) . 'classes/class-wp_bookmarks.php';

	function run_wp_bookmarks()
	{

		$plugin = new wp_bookmarks();
		$plugin->run();

	}

run_wp_bookmarks();