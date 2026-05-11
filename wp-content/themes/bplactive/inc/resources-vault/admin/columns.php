<?php
/**
 * Add custom columns to Resource Vault admin list
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter('manage_resource_vault_posts_columns', 'bpl_resource_vault_admin_columns');
function bpl_resource_vault_admin_columns($columns) {
    $columns['resource_downloads'] = __('Downloads', 'bplactive');
    $columns['resource_leads'] = __('Leads', 'bplactive');
    $columns['resource_featured'] = __('Featured', 'bplactive');
    return $columns;
}

add_action('manage_resource_vault_posts_custom_column', 'bpl_resource_vault_admin_column_content', 10, 2);
function bpl_resource_vault_admin_column_content($column, $post_id) {
    if ($column === 'resource_downloads') {
        echo (int) get_post_meta($post_id, 'bpl_download_count', true);
    } elseif ($column === 'resource_leads') {
        echo (int) get_post_meta($post_id, 'bpl_lead_count', true);
    } elseif ($column === 'resource_featured') {
        echo get_field('featured_resource', $post_id) ? __('Yes', 'bplactive') : '';
    }
}
