<?php
/*
Plugin Name: WP Courier
*/

//@TODO: add new cap and give it to anyone with a publish_post cap
Class Courier {

	var $pt = 'courier_email';
	
	function Courier() {
	
		add_action( 'init', array( &$this, 'init' ) );
	
		if( !is_admin() )
			return;
	
		add_action( 'admin_menu', array( &$this, 'add_menus' ) );
		
		// Remove "New Post" button
		// @TODO Arggh his doesn't work
		add_filter( 'favorite_actions', array( &$this, 'no_new_post' ) );
	
	}
	
	function init() {
	
		$labels = array(
			'name' => __( 'Emails', 'courier' ),
			'singular_name' => __( 'Email', 'courier' ),
			// add_new, add_new_item, edit_item, new_item, view_item
			'search_items' => __( 'Search Emails', 'courier' ),
			'not_found' => __( 'No emails found.', 'courier' ),
			'not_found_in_trash' => __( 'No trashed emails.', 'courier' ),
			'menu_name' => __( 'History', 'courier' ),
		);

		$args = array(
			'labels' => $labels,
			'show_in_menu' => 'courier',
			'show_ui' => true,
			'public' => false,
			'rewrite'      => false,
			'query_var'    => false,
		);
		register_post_type( $this->pt, $args );
	
	}
	
	function add_menus() {
		add_menu_page( 'Compose new email', 'Courier', 'publish_posts', 'courier', array( $this, 'show_menu_new_email' ), trailingslashit( plugin_dir_url( __FILE__ ) ) . 'image/icon.png' );
		add_submenu_page( 'courier', 'Compose new email', 'New email', 'publish_posts', 'courier', array( $this, 'show_menu_new_email' ) );
		add_submenu_page( 'courier', 'Courier options', 'Options', 'manage_options', 'courier_options', array( $this, 'show_menu_options' ) );
	}
	
	function show_menu_new_email() { ?>

		<div class="wrap"><div id="icon-tools" class="icon32"></div>
			<h2>Courier</h2>
			
			<h3>Compose new message</h3>
			
			<h3>Connect to MailChimp</h3>
		</div>
	
	<?php }
	
	function show_menu_options() { ?>

		<div class="wrap"><div id="icon-tools" class="icon32"></div>
			<h2>Courier</h2>
			
			<h3>Compose new message</h3>
			
			<h3>Connect to MailChimp</h3>
		</div>
	
	<?php }
	
	function get_html_from_template( $args = array() ) {
	
		
	
	}
	
	function no_new_post( $actions ) {
		die( print_r( $actions ) );
		if ( isset( $actions[ 'post-new.php?post_type=' . $this->pt ] ) )
			unset( $actions[ 'post-new.php?post_type=' . $this->pt ] );
		return $actions;

	}


}

if( is_admin() )
	new Courier;