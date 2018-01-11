<?php
function portfolio_init(){
  $labels = array(
		'name'               => __( 'Portfolio', 'profilepage' ),
		'singular_name'      => __( 'portfolio', 'profilepage' ),
		'menu_name'          => __( 'Portfolio', 'profilepage' ),
		'name_admin_bar'     => __( 'Portfolio', 'profilepage' ),
		'add_new'            => __( 'Add New', 'profilepage' ),
		'add_new_item'       => __( 'Add New Portfolio', 'profilepage' ),
		'new_item'           => __( 'New Portfolio', 'profilepage' ),
		'edit_item'          => __( 'Edit Portfolio', 'profilepage' ),
		'view_item'          => __( 'View Portfolio', 'profilepage' ),
		'all_items'          => __( 'All Portfolio', 'profilepage' ),
		'search_items'       => __( 'Search Portfolio', 'profilepage' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'profilepage' ),
		'not_found'          => __( 'No Portfolio found.', 'profilepage' ),
		'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'profilepage' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'A custom post type for portfolio.', 'profilepage' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' =>'portfolio'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
    'exclude_from_search'  => false,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'revision', 'excerpt' ),
    'taxonomies'         => array('type', 'software')
	);

	register_post_type( 'portfolio', $args );
}

function custom_taxonomies_init(){
  //add new taxonomy: hierarchical

  $labels = array(
		'name'               => __( 'Types', 'profilepage' ),
		'singular_name'      => __( 'Type', 'profilepage' ),
		'menu_name'          => __( 'Types', 'profilepage' ),
		'name_admin_bar'     => __( 'Type', 'profilepage' ),
		'add_new'            => __( 'Add New', 'profilepage' ),
		'add_new_item'       => __( 'Add New Type', 'profilepage' ),
		'new_item'           => __( 'New Type', 'profilepage' ),
		'edit_item'          => __( 'Edit Type', 'profilepage' ),
		'view_item'          => __( 'View Type', 'profilepage' ),
		'all_items'          => __( 'All Types', 'profilepage' ),
		'search_items'       => __( 'Search Types', 'profilepage' ),
		'parent_item_colon'  => __( 'Parent Type:', 'profilepage' ),
		'not_found'          => __( 'No Types found.', 'profilepage' ),
		'not_found_in_trash' => __( 'No Types found in Trash.', 'profilepage' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'A custom taxonomy category for portfolio.', 'profilepage' ),
		'show_ui'            => true,
    'show_admin_column'  => true,
		'query_var'          => true,
		'rewrite'            => array('slug' =>'type'),
		'hierarchical'       => true,
	);

  register_taxonomy( 'type', 'portfolio', $args );

//add new taxonomy: non-hierarchical

  $labels = array(
		'name'               => __( 'Softwares', 'profilepage' ),
		'singular_name'      => __( 'Software', 'profilepage' ),
		'menu_name'          => __( 'Softwares', 'profilepage' ),
		'name_admin_bar'     => __( 'Software', 'profilepage' ),
		'add_new'            => __( 'Add New', 'profilepage' ),
		'add_new_item'       => __( 'Add New Software', 'profilepage' ),
		'new_item'           => __( 'New Software', 'profilepage' ),
		'edit_item'          => __( 'Edit Software', 'profilepage' ),
		'view_item'          => __( 'View Software', 'profilepage' ),
		'all_items'          => __( 'All Softwares', 'profilepage' ),
		'search_items'       => __( 'Search Softwares', 'profilepage' ),
		'parent_item_colon'  => __( 'Parent Writer:', 'profilepage' ),
		'not_found'          => __( 'No Softwares found.', 'profilepage' ),
		'not_found_in_trash' => __( 'No Softwares found in Trash.', 'profilepage' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'A custom taxonomy tags for portfolio.', 'profilepage' ),
		'show_ui'            => true,
    'show_admin_column'  => true,
		'query_var'          => true,
		'rewrite'            => array('slug' =>'software'),
		'hierarchical'       => false,
	);

  register_taxonomy( 'software', 'portfolio', $args );

/*
  register_taxonomy( 'test', 'portfolio', array(
    'label'             => __('Tests', 'profilepage'),
    'description'        => __( 'A custom taxonomy tags for portfolio.', 'profilepage' ),
    'rewrite'            => array('slug' =>'tests'),
    'hierarchical'       => false,
  ) );
  */
}
