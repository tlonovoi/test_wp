<?php

define( "THEME_URL",  get_template_directory_uri() ); 

function my_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script', THEME_URL . '/js/script.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' ); 

add_theme_support('post-thumbnails');

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'test-task-leads' ), 
        )
    );
}
add_action( 'init', 'mytheme_register_menus' );
 
function custom_nav_menu_css_class($classes, $item, $args) {
  $classes[] = 'header_menu_item';
  return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 3);

 
function custom_nav_menu_link_attributes($atts, $item, $args) {
  $atts['class'] = 'header_menu_link';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 3);

		$labels_tickets = array(
		'name'                => __('Tickets'),
		'singular_name'       => __('Tickets'),
		'menu_name'           => __('Tickets'),
		'parent_item_colon'   => __('Parent item'),
		'all_items'           => __('All'),
		'view_item'           => __('View item'),
		'add_new_item'        => __('Add item'),
		'add_new'             => __('Add New'),
		'edit_item'           => __('Edit item'),
		'update_item'         => __('Update item'),
		'search_items'        => __('Search item'),
		'not_found'           => __('Not Found'),
		'not_found_in_trash'  => __('Not found in Trash')
	);

		$args_tickets = array(
		'label'               => __('team'),
		'description'         => __('team'),
		'labels'              => $labels_tickets,
		'supports'            => array('title', 'editor',  'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'exclude_from_search'   => false,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'menu_icon' => 'dashicons-admin-users',
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);

 
register_post_type('tickets', $args_tickets);
