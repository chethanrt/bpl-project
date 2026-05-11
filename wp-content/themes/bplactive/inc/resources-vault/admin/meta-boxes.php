<?php
/**
 * Add custom meta boxes for Resource Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('add_meta_boxes', 'bpl_resource_vault_add_meta_boxes');
function bpl_resource_vault_add_meta_boxes() {
    add_meta_box(
        'bpl_resource_downloads',
        __('Download Stats', 'bplactive'),
        'bpl_resource_downloads_meta_box',
        'resource_vault',
        'side',
        'default'
    );
}

function bpl_resource_downloads_meta_box($post) {
    $downloads = (int) get_post_meta($post->ID, 'bpl_download_count', true);
    $leads = (int) get_post_meta($post->ID, 'bpl_lead_count', true);
    echo '<p><strong>' . esc_html__('Downloads:', 'bplactive') . '</strong> ' . esc_html($downloads) . '</p>';
    echo '<p><strong>' . esc_html__('Leads:', 'bplactive') . '</strong> ' . esc_html($leads) . '</p>';
}
