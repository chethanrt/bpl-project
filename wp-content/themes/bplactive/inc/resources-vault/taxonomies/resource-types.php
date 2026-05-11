<?php
/**
 * Register Resource Types taxonomy
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'bpl_register_resource_types_taxonomy' );
function bpl_register_resource_types_taxonomy() {
    $labels = array(
        'name'              => __( 'Resource Types', 'bplactive' ),
        'singular_name'     => __( 'Resource Type', 'bplactive' ),
        'search_items'      => __( 'Search Resource Types', 'bplactive' ),
        'all_items'         => __( 'All Resource Types', 'bplactive' ),
        'parent_item'       => __( 'Parent Type', 'bplactive' ),
        'parent_item_colon' => __( 'Parent Type:', 'bplactive' ),
        'edit_item'         => __( 'Edit Type', 'bplactive' ),
        'update_item'       => __( 'Update Type', 'bplactive' ),
        'add_new_item'      => __( 'Add New Type', 'bplactive' ),
        'new_item_name'     => __( 'New Type Name', 'bplactive' ),
        'menu_name'         => __( 'Resource Types', 'bplactive' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'resource-type', 'with_front' => false ),
        'show_in_rest'      => true,
        'rest_base'         => 'resource-types',
    );
    register_taxonomy( 'resource_type', array( 'resource_vault' ), $args );
}
