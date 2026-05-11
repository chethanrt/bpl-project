<?php
/**
 * AJAX handler for resource search
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_ajax_bpl_resource_search', 'bpl_resource_vault_ajax_search');
add_action('wp_ajax_nopriv_bpl_resource_search', 'bpl_resource_vault_ajax_search');
function bpl_resource_vault_ajax_search() {
    check_ajax_referer('bpl_resources_vault', 'nonce');
    $args = array(
        'post_type' => 'resource_vault',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'paged' => isset($_POST['page']) ? intval($_POST['page']) : 1,
        's' => sanitize_text_field($_POST['s'])
    );
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            include BPL_RESOURCES_VAULT_PATH . 'templates/resource-card.php';
        }
    } else {
        echo '<p>No resources found.</p>';
    }
    wp_reset_postdata();
    $html = ob_get_clean();
    wp_send_json_success(array('html' => $html, 'max_num_pages' => $query->max_num_pages));
}
