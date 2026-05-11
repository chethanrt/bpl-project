<?php
/**
 * Register Resource Vault Custom Post Type
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'bpl_register_resource_vault_cpt' );
function bpl_register_resource_vault_cpt() {
    $labels = array(
        'name'               => __( 'Resources', 'bplactive' ),
        'singular_name'      => __( 'Resource', 'bplactive' ),
        'menu_name'          => __( 'Resources Vault', 'bplactive' ),
        'name_admin_bar'     => __( 'Resource', 'bplactive' ),
        'add_new'            => __( 'Add New', 'bplactive' ),
        'add_new_item'       => __( 'Add New Resource', 'bplactive' ),
        'edit_item'          => __( 'Edit Resource', 'bplactive' ),
        'new_item'           => __( 'New Resource', 'bplactive' ),
        'view_item'          => __( 'View Resource', 'bplactive' ),
        'search_items'       => __( 'Search Resources', 'bplactive' ),
        'not_found'          => __( 'No resources found', 'bplactive' ),
        'not_found_in_trash' => __( 'No resources found in Trash', 'bplactive' ),
        'all_items'          => __( 'All Resources', 'bplactive' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'show_in_rest'       => true,
        'rest_base'          => 'resources',
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> false,
        'can_export'         => true,
    );
    register_post_type( 'resource_vault', $args );
}

// Flush rewrite rules on activation
register_activation_hook( get_template_directory() . '/functions.php', 'bpl_resource_vault_flush_rewrite' );
function bpl_resource_vault_flush_rewrite() {
    bpl_register_resource_vault_cpt();
    flush_rewrite_rules();
}
