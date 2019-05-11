<?php
//The admin-specific functionality of the plugin.
class wp_bookmarks_admin{

    public function admin_pages() {

        global $submenu;

        //review listing page
        //$bookmark_list_page_hook = add_menu_page( esc_html__( 'CBX WP Bookmark Listing', 'cbxwpbookmark' ), esc_html__( 'CBX Bookmark', 'cbxwpbookmark' ), 'manage_options', 'cbxwpbookmark', array( $this, 'display_admin_bookmark_list_page' ), 'dashicons-chart-line', '6' );
        //add_menu_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
        add_menu_page('WP Bookmarks Plugin', 'WP Bookmarks', 8, __FILE__, array($this,'display_admin_bookmarks_page'));

    }


    public function display_admin_bookmarks_page() {

        global $wpdb;

        //$plugin_data = get_plugin_data( plugin_dir_path( __DIR__ ) . '/../' . $this->plugin_basename );

        //include( 'partials/bookmark_list_display.php' );
        require_once plugin_dir_path(dirname(__FILE__)) .'templates/template-bookmarks_admin.php' ;
        //require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-wp_bookmarks_admin.php';
    }//end method display_admin_bookmark_listing_page
}

