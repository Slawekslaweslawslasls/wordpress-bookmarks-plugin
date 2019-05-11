<?php
//This class defines all code necessary to run during the plugin's uninstalation.



class wp_bookmarks_uninstall{

	public static function uninstall(){
	   global $wpdb;

    $bookmarkTable = $wpdb->prefix . 'wp_bookmarks_plugin_bookmarks';
    $categoriesTable = $wpdb->prefix . 'wp_bookmarks_plugin_categories';

    $sql = "DROP TABLE IF EXISTS " .$bookmarkTable.','.$categoriesTable;
    $wpdb->query($sql);

    do_action('wordpress-bookmarks_plugin_table_delete');

    do_action('wordpress-bookmarks_plugin_uninstall', $table_names, $option_prefix);
    //exit();

  }

}