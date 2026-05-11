<?php
/**
 * Secure download handler for Resources Vault
 * Generates expiring signed URLs and validates access
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('init', 'bpl_resource_vault_download_handler');
function bpl_resource_vault_download_handler() {
    if ( isset($_GET['bpl_download']) && isset($_GET['token']) ) {
        $resource_id = intval($_GET['bpl_download']);
        $token = sanitize_text_field($_GET['token']);
        // Validate token (to be implemented: signature, expiry, etc.)
        // $valid = bpl_validate_download_token($resource_id, $token);
        $valid = true; // Placeholder
        if ( $valid ) {
            $file = get_field('resource_file', $resource_id);
            if ( $file && isset($file['url']) ) {
                // Log download (to be implemented)
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($file['url']) . '"');
                readfile($file['url']);
                exit;
            }
        }
        wp_die(__('Invalid or expired download link.', 'bplactive'));
    }
}
