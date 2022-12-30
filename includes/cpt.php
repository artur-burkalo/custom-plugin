<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * Can set up a custom post type using the format below for any pages rather than using CPT UI plugin
 * Below example of services CPT
*/

// add_action( 'init', 'services_cpt', 0 );
function services_cpt() {
  
        $labels = array(
            'name'                => _x( 'Services', 'Post Type General Name', 'custom-plugin' ),
            'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'custom-plugin' ),
            'menu_name'           => __( 'Services', 'custom-plugin' ),
            'parent_item_colon'   => __( 'Parent Service', 'custom-plugin' ),
            'all_items'           => __( 'All Services', 'custom-plugin' ),
            'view_item'           => __( 'View Service', 'custom-plugin' ),
            'add_new_item'        => __( 'Add New Service', 'custom-plugin' ),
            'add_new'             => __( 'Add New', 'custom-plugin' ),
            'edit_item'           => __( 'Edit Service', 'custom-plugin' ),
            'update_item'         => __( 'Update Service', 'custom-plugin' ),
            'search_items'        => __( 'Search Service', 'custom-plugin' ),
            'not_found'           => __( 'Not Found', 'custom-plugin' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'custom-plugin' ),
        );
          
          
        $args = array(
            'label'               => __( 'Services', 'custom-plugin' ),
            'description'         => __( 'Service news and reviews', 'custom-plugin' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', 'revisions', 'page-attributes' ), 
            /* 
             * addional supports that can be used 
             * title, editor, author, thumbnail, excerpt, trackbacks, 
             * custom-fields, comments, revisions, page-attributes, post-formats
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-products',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        register_post_type( 'services', $args );
      
}