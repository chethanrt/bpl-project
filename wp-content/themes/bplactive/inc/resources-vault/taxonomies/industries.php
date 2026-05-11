<?php
/**
 * Register Industries taxonomy
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'bpl_register_industries_taxonomy' );
function bpl_register_industries_taxonomy() {
    $labels = array(
        'name'              => __( 'Industries', 'bplactive' ),
        'singular_name'     => __( 'Industry', 'bplactive' ),
        'search_items'      => __( 'Search Industries', 'bplactive' ),
        'all_items'         => __( 'All Industries', 'bplactive' ),
        'parent_item'       => __( 'Parent Industry', 'bplactive' ),
        'parent_item_colon' => __( 'Parent Industry:', 'bplactive' ),
        'edit_item'         => __( 'Edit Industry', 'bplactive' ),
        'update_item'       => __( 'Update Industry', 'bplactive' ),
        'add_new_item'      => __( 'Add New Industry', 'bplactive' ),
        'new_item_name'     => __( 'New Industry Name', 'bplactive' ),
        'menu_name'         => __( 'Industries', 'bplactive' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'industry', 'with_front' => false ),
        'show_in_rest'      => true,
        'rest_base'         => 'industries',
    );
    register_taxonomy( 'industry', array( 'resource_vault' ), $args );
}
