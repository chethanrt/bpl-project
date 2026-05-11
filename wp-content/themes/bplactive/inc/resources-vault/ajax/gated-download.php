<?php
/**
 * AJAX handler for gated download form submission
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_ajax_bpl_gated_download', 'bpl_resource_vault_ajax_gated_download');
add_action('wp_ajax_nopriv_bpl_gated_download', 'bpl_resource_vault_ajax_gated_download');
function bpl_resource_vault_ajax_gated_download() {
    check_ajax_referer('bpl_resources_vault', 'nonce');
    $resource_id = intval($_POST['resource_id']);
    $fields = array(
        'name' => sanitize_text_field($_POST['name']),
        'email' => sanitize_email($_POST['email']),
        'company' => sanitize_text_field($_POST['company']),
        'phone' => sanitize_text_field($_POST['phone']),
        'country' => sanitize_text_field($_POST['country']),
        'job_title' => sanitize_text_field($_POST['job_title']),
        'consent' => isset($_POST['consent']) ? 1 : 0,
        'ip' => $_SERVER['REMOTE_ADDR'],
        'referrer' => isset($_SERVER['HTTP_REFERER']) ? esc_url_raw($_SERVER['HTTP_REFERER']) : '',
        'timestamp' => current_time('mysql'),
    );
    // Save lead to DB (to be implemented in DB schema)
    // bpl_save_resource_lead($resource_id, $fields);
    // Send admin/thank-you emails (to be implemented)
    // Generate secure download URL (to be implemented)
    // Log download (to be implemented)
    wp_send_json_success(array('message' => __('Thank you! Your download will begin shortly.', 'bplactive')));
}
