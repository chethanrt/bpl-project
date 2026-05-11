<?php
/**
 * Schema and SEO helpers for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_resource_vault_schema_markup($resource_id) {
    // Output JSON-LD schema for resource
    $data = array(
        '@context' => 'https://schema.org',
        '@type' => 'CreativeWork',
        'name' => get_the_title($resource_id),
        'description' => get_the_excerpt($resource_id),
        'url' => get_permalink($resource_id),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($data) . '</script>';
}
