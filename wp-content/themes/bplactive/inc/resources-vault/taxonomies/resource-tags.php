<?php
/**
 * Register Resource Tags taxonomy
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'bpl_register_resource_tags_taxonomy' );
function bpl_register_resource_tags_taxonomy() {
    $labels = array(
        'name'              => __( 'Resource Tags', 'bplactive' ),
        'singular_name'     => __( 'Resource Tag', 'bplactive' ),
        'search_items'      => __( 'Search Resource Tags', 'bplactive' ),
        'all_items'         => __( 'All Resource Tags', 'bplactive' ),
        'edit_item'         => __( 'Edit Tag', 'bplactive' ),
        'update_item'       => __( 'Update Tag', 'bplactive' ),
        'add_new_item'      => __( 'Add New Tag', 'bplactive' ),
        'new_item_name'     => __( 'New Tag Name', 'bplactive' ),
        'menu_name'         => __( 'Tags', 'bplactive' ),
    );
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'resource-tag', 'with_front' => false ),
        'show_in_rest'      => true,
        'rest_base'         => 'resource-tags',
    );
    register_taxonomy( 'resource_tag', array( 'resource_vault' ), $args );
}
