<?php
//This class defines all code necessary to run during the plugin's activation.

class wp_bookmarks_activate{
	global $wpdb;

	// define charset collate
	$charset_collate = $wpdb->get_charset_collate();

	//set names to custom tables with prefix
	$bookmark = $wpdb->prefix . 'cbxwpbookmark';
	$cattable = $wpdb->prefix . 'cbxwpbookmarkcat';

}