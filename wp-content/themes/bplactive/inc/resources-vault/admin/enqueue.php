<?php
/**
 * Enqueue admin CSS/JS for Resource Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('admin_enqueue_scripts', 'bpl_resource_vault_admin_enqueue');
function bpl_resource_vault_admin_enqueue($hook) {
    global $post_type;
    if ($post_type === 'resource_vault' || $hook === 'toplevel_page_bpl_resource_leads') {
        wp_enqueue_style('bpl-resources-admin', BPL_RESOURCES_VAULT_URL . 'assets/css/resources-admin.css', array(), '1.0');
        wp_enqueue_script('bpl-resources-admin', BPL_RESOURCES_VAULT_URL . 'assets/js/resources-admin.js', array('jquery'), '1.0', true);
    }
}
