<?php
/**
 * Product linking helpers for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_get_linked_products($resource_id) {
    $products = get_field('linked_products', $resource_id);
    if ( $products && is_array($products) ) {
        return $products;
    }
    return array();
}

function bpl_get_resources_for_product($product_id) {
    $args = array(
        'post_type' => 'resource_vault',
        'meta_query' => array(
            array(
                'key' => 'linked_products',
                'value' => '"' . $product_id . '"',
                'compare' => 'LIKE',
            ),
        ),
        'posts_per_page' => -1,
    );
    return get_posts($args);
}
