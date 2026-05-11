<?php
/**
 * AJAX handler for load more resources
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_ajax_bpl_resource_load_more', 'bpl_resource_vault_ajax_load_more');
add_action('wp_ajax_nopriv_bpl_resource_load_more', 'bpl_resource_vault_ajax_load_more');
function bpl_resource_vault_ajax_load_more() {
    check_ajax_referer('bpl_resources_vault', 'nonce');
    $args = array(
        'post_type' => 'resource_vault',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'paged' => isset($_POST['page']) ? intval($_POST['page']) : 1,
    );
    // Add filters if present
    if (!empty($_POST['resource_category'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'resource_category',
            'field' => 'slug',
            'terms' => sanitize_text_field($_POST['resource_category'])
        );
    }
    if (!empty($_POST['industry'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'industry',
            'field' => 'slug',
            'terms' => sanitize_text_field($_POST['industry'])
        );
    }
    if (!empty($_POST['resource_type'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'resource_type',
            'field' => 'slug',
            'terms' => sanitize_text_field($_POST['resource_type'])
        );
    }
    if (!empty($_POST['s'])) {
        $args['s'] = sanitize_text_field($_POST['s']);
    }
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
