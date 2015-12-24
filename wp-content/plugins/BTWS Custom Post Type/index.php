<?php
/*
Plugin Name: BTW Custom post type
Description: Custom post from the website BTWS.
Version: 1.0
Author: BTW - Léo
Author URI: http://www.btw.ch
*/

// Register Custom Post Type
function people() {

	$labels = array(
		'name'                => _x( 'People', 'Post Type General Name', 'btw' ),
		'singular_name'       => _x( 'People', 'Post Type Singular Name', 'btw' ),
		'menu_name'           => __( 'People', 'btw' ),
		'parent_item_colon'   => __( 'Parent people:', 'btw' ),
		'all_items'           => __( 'All people', 'btw' ),
		'view_item'           => __( 'View people', 'btw' ),
		'add_new_item'        => __( 'Add New people', 'btw' ),
		'add_new'             => __( 'Add New', 'btw' ),
		'edit_item'           => __( 'Edit people', 'btw' ),
		'update_item'         => __( 'Update people', 'btw' ),
		'search_items'        => __( 'Search people', 'btw' ),
		'not_found'           => __( 'Not found', 'btw' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'btw' ),
	);
	$args = array(
		'label'               => __( 'people', 'btw' ),
		'description'         => __( 'People from btw', 'btw' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		// 'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'people', $args );
}
// Register Custom Post Type
function btws_works() {

	$labels = array(
		'name'                => _x( 'Works', 'Post Type General Name', 'btws' ),
		'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'btws' ),
		'menu_name'           => __( 'Works', 'btws' ),
		'name_admin_bar'      => __( 'Works', 'btws' ),
		'parent_item_colon'   => __( 'Parent Item:', 'btws' ),
		'all_items'           => __( 'All works', 'btws' ),
		'add_new_item'        => __( 'Add New Work', 'btws' ),
		'add_new'             => __( 'Add Work', 'btws' ),
		'new_item'            => __( 'New Work', 'btws' ),
		'edit_item'           => __( 'Edit Work', 'btws' ),
		'update_item'         => __( 'Update Work', 'btws' ),
		'view_item'           => __( 'View Work', 'btws' ),
		'search_items'        => __( 'Search Work', 'btws' ),
		'not_found'           => __( 'Not found', 'btws' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'btws' ),
	);
	$args = array(
		'label'               => __( 'work', 'btws' ),
		'description'         => __( 'Works in progress', 'btws' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		// 'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-book',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'work', $args );

}

// Hook into the 'init' action
add_action( 'init', 'btws_works', 0 );
add_action( 'init', 'people', 0 );


// Register Custom Taxonomy
function btws_taxo_works() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'btws' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'btws' ),
		'menu_name'                  => __( 'Taxonomy', 'btws' ),
		'all_items'                  => __( 'All Items', 'btws' ),
		'parent_item'                => __( 'Parent Item', 'btws' ),
		'parent_item_colon'          => __( 'Parent Item:', 'btws' ),
		'new_item_name'              => __( 'New Item Name', 'btws' ),
		'add_new_item'               => __( 'Add New Item', 'btws' ),
		'edit_item'                  => __( 'Edit Item', 'btws' ),
		'update_item'                => __( 'Update Item', 'btws' ),
		'view_item'                  => __( 'View Item', 'btws' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'btws' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'btws' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'btws' ),
		'popular_items'              => __( 'Popular Items', 'btws' ),
		'search_items'               => __( 'Search Items', 'btws' ),
		'not_found'                  => __( 'Not Found', 'btws' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'category_works', array( 'work' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'btws_taxo_works', 0 );
