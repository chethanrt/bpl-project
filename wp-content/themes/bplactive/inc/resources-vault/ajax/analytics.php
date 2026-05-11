<?php
/**
 * AJAX handler for resource analytics (download logging, etc.)
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_ajax_bpl_resource_analytics', 'bpl_resource_vault_ajax_analytics');
add_action('wp_ajax_nopriv_bpl_resource_analytics', 'bpl_resource_vault_ajax_analytics');
function bpl_resource_vault_ajax_analytics() {
    check_ajax_referer('bpl_resources_vault', 'nonce');
    $resource_id = intval($_POST['resource_id']);
    // Log analytics (to be implemented in DB schema)
    // bpl_log_resource_analytics($resource_id, ...);
    wp_send_json_success();
}
