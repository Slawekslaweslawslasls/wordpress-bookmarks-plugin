
<?

require_once plugin_dir_path(dirname(__FILE__)) .'classes/class-wp_bookmarks-table_handler.php' ;
$bookmark_list = new wp_bookmarks_table_handler();

//Fetch, prepare, sort, and filter CBXSCRatingReviewLog data
$bookmark_list->prepare_items();
?>


    <div class="wrap">
	<h1 class="wp-heading-inline">
		<?php esc_html_e( 'WP Bookmarkы by Slawek: Bookmark  Manager', 'wpbookmark' ); ?>
	</h1>
	<p><?php echo '<a class="button button-primary button-large" href="' . admin_url( 'admin.php?page=cbxwpbookmarkcats&view=edit&id=0' ) . '">' . esc_html__( 'Create New Category', 'cbxwpbookmark' ) . '</a>'; ?></p>

	<div id="poststuff">
		<div id="post-body" class="metabox-holder">
			<!-- main content -->
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<div class="inside">
							<form id="cbxwpbookmark_bookmark_category" method="post">
								<?php $bookmark_list->views(); ?>

								<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
								<?php $bookmark_list->search_box( esc_html__( 'Search Bookmark', 'cbxwpbookmark' ), 'cbxwpbookmarkcategory' ); ?>

								<?php $bookmark_list->display() ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear clearfix"></div>
	</div>
</div>