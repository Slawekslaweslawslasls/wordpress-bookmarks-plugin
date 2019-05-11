<?php


class wp_bookmarks{

		protected $loader;
		protected $plugin_name;
		protected $version;


		public function __construct()
		{

			$this->plugin_name = WP_BOOKMARKS_PLUGIN_NAME;
			$this->version     = WP_BOOKMARKS_PLUGIN_VERSION;


			//$this->define_admin_hooks();
			//$this->define_public_hooks();
		}

        //Register all of the hooks related to the admin area functionality
        public function run()
        {
            require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-wp_bookmarks_admin.php';
            //$plugin_admin = new wp_bookmarks_admin($this->plugin_name, $this->version);

            $plugin_admin = new wp_bookmarks_admin();

            //add_filter($hook['hook'], array($hook['component'], $hook['callback']),10, 1);

            add_action('admin_menu', array($plugin_admin , 'admin_pages'), 10, 1);
            //add_action('admin_menu', 'testmenu');
            //add_menu_page('Test Toplevel', 'Test Toplevel', 8, __FILE__, 'mt_toplevel_page');


        }




}