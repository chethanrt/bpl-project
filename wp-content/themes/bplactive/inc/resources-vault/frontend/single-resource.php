<?php
/**
 * Single template logic for Resources Vault
 * Hooks into single_template to load custom single template
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter('single_template', 'bpl_resource_vault_single_template');
function bpl_resource_vault_single_template($template) {
    global $post;
    if ( $post && $post->post_type === 'resource_vault' ) {
        $custom = BPL_RESOURCES_VAULT_PATH . 'frontend/single-resource-template.php';
        if ( file_exists($custom) ) return $custom;
    }
    return $template;
}
