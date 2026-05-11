<?php
/**
 * Enqueue frontend CSS/JS for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts', 'bpl_resource_vault_frontend_enqueue');
function bpl_resource_vault_frontend_enqueue() {
    if ( is_post_type_archive('resource_vault') || is_singular('resource_vault') ) {
        wp_enqueue_style('bpl-resources-vault', BPL_RESOURCES_VAULT_URL . 'assets/css/resources-vault.css', array(), '1.0');
        wp_enqueue_script('bpl-resources-vault', BPL_RESOURCES_VAULT_URL . 'assets/js/resources-vault.js', array('jquery'), '1.0', true);
        wp_localize_script('bpl-resources-vault', 'bplResourcesVault', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('bpl_resources_vault'),
        ));
    }
}
