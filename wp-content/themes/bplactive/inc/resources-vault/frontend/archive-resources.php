<?php
/**
 * Archive template logic for Resources Vault
 * Hooks into template_include to load custom archive template
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter('template_include', 'bpl_resource_vault_archive_template');
function bpl_resource_vault_archive_template($template) {
    if ( is_post_type_archive('resource_vault') ) {
        $custom = BPL_RESOURCES_VAULT_PATH . 'frontend/archive-resources-template.php';
        if ( file_exists($custom) ) return $custom;
    }
    return $template;
}
