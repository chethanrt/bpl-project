<?php
/**
 * Register Resource Categories taxonomy
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'bpl_register_resource_categories_taxonomy' );
function bpl_register_resource_categories_taxonomy() {
    $labels = array(
        'name'              => __( 'Resource Categories', 'bplactive' ),
        'singular_name'     => __( 'Resource Category', 'bplactive' ),
        'search_items'      => __( 'Search Resource Categories', 'bplactive' ),
        'all_items'         => __( 'All Resource Categories', 'bplactive' ),
        'parent_item'       => __( 'Parent Category', 'bplactive' ),
        'parent_item_colon' => __( 'Parent Category:', 'bplactive' ),
        'edit_item'         => __( 'Edit Category', 'bplactive' ),
        'update_item'       => __( 'Update Category', 'bplactive' ),
        'add_new_item'      => __( 'Add New Category', 'bplactive' ),
        'new_item_name'     => __( 'New Category Name', 'bplactive' ),
        'menu_name'         => __( 'Categories', 'bplactive' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'resource-category', 'with_front' => false ),
        'show_in_rest'      => true,
        'rest_base'         => 'resource-categories',
    );
    register_taxonomy( 'resource_category', array( 'resource_vault' ), $args );
}
