<?php

add_action( 'init', 'base_custom_init' );
function base_custom_init() {
	// Testimonial
	$labels = array(
		'name' => __( 'Testimonials', 'base' ),
		'singular_name' => __( 'Testimonial', 'base' ),
		'add_new' => __( 'Add New', 'base' ),
		'add_new_item' => __( 'Add New Testimonial', 'base' ),
		'edit_item' => __( 'Edit Testimonial', 'base' ),
		'new_item' => __( 'New Testimonial', 'base' ),
		'all_items' => __( 'All Testimonials', 'base' ),
		'view_item' => __( 'View Testimonial', 'base' ),
		'search_items' => __( 'Search Testimonials', 'base' ),
		'not_found' => __( 'No Testimonials found', 'base' ),
		'not_found_in_trash' => __( 'No Testimonials in Trash', 'base' ),
		'parent_item_colon' => '',
		'menu_name' => __( 'Testimonials', 'base' ),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'testimonial' ),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest' => false,
	);
	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'base_create_taxonomies', 0 );
function base_create_taxonomies() {
	// Terms
	$labels = array(
		'name' => _x( 'Terms', 'taxonomy general name' ),
		'singular_name' => _x( 'Term', 'taxonomy singular name' ),
		'search_items' => __( 'Search Terms', 'base' ),
		'popular_items' => __( 'Popular Terms', 'base' ),
		'all_items' => __( 'All Terms', 'base' ),
		'parent_item' => __( 'Parent Term', 'base' ),
		'parent_item_colon' => __( 'Parent Term:', 'base' ),
		'edit_item' => __( 'Edit Term', 'base' ),
		'update_item' => __( 'Update Term', 'base' ),
		'add_new_item' => __( 'Add New Term', 'base' ),
		'new_item_name' => __( 'New Terms', 'base' ),
		'separate_items_with_commas' => __( 'Separate Terms with commas', 'base' ),
		'add_or_remove_items' => __( 'Add or remove Terms', 'base' ),
		'choose_from_most_used' => __( 'Choose from the most used Terms', 'base' ),
		'menu_name' => __( 'Terms', 'base' ),
	);
	register_taxonomy( 'terms', 'required_content_type', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'terms' ),
	));
}
