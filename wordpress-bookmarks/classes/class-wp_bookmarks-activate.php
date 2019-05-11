<?php
//This class defines all code necessary to run during the plugin's activation.

class wp_bookmarks_activate{
	public static function activate() {

			global $wpdb;

			// define charset collate
			$charset_collate = $wpdb->get_charset_collate();

			//set names to custom tables with prefix
			$bookmarkTable = $wpdb->prefix . 'wp_bookmarks';
			$categoriesTable = $wpdb->prefix . 'wp_categories_bookmarks';


			//  cbx_bookmark Table Created

			$sql = "CREATE TABLE $bookmarkTable (
          `id` mediumint(9) NOT NULL AUTO_INCREMENT,
          `object_id` int(11) NOT NULL,
          `object_type` varchar(60) NOT NULL DEFAULT 'post',
          `cat_id` int(11) NOT NULL,
          `user_id` int(11) NOT NULL,
          `created_date`  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
          `modyfied_date` TIMESTAMP NOT NULL ,
          PRIMARY KEY (`id`)) $charset_collate;";


			//  category Table Created

			$sql .= "CREATE TABLE $categoriesTable (
          `id` mediumint(9) NOT NULL AUTO_INCREMENT,
           `cat_name` varchar(55) NOT NULL,
           `user_id` bigint(20) unsigned NOT NULL,
           `privacy` tinyint(2) NOT NULL DEFAULT '1',
           `created_date`  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
           `modyfied_date` TIMESTAMP NOT NULL ,
           PRIMARY KEY (`id`))  $charset_collate;";


			require_once( ABSPATH . "wp-admin/includes/upgrade.php" );

			//ob_start();
			dbDelta( $sql );
			//ob_clean();

	}
}