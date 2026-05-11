<?php
/**
 * Register ACF fields for Resource Vault
 * Requires Advanced Custom Fields PRO
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('acf/init', 'bpl_register_resource_vault_acf_fields');
function bpl_register_resource_vault_acf_fields() {
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_resource_vault',
            'title' => 'Resource Details',
            'fields' => array(
                array(
                    'key' => 'field_resource_file',
                    'label' => 'Resource File',
                    'name' => 'resource_file',
                    'type' => 'file',
                    'return_format' => 'array',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_gated_download',
                    'label' => 'Gated Download',
                    'name' => 'gated_download',
                    'type' => 'true_false',
                    'ui' => 1,
                    'message' => 'Require user to fill form before download',
                ),
                array(
                    'key' => 'field_expiry_date',
                    'label' => 'Expiry Date',
                    'name' => 'expiry_date',
                    'type' => 'date_picker',
                    'required' => 0,
                ),
                array(
                    'key' => 'field_preview_images',
                    'label' => 'Preview Images',
                    'name' => 'preview_images',
                    'type' => 'gallery',
                    'required' => 0,
                ),
                array(
                    'key' => 'field_featured_resource',
                    'label' => 'Featured Resource',
                    'name' => 'featured_resource',
                    'type' => 'true_false',
                    'ui' => 1,
                ),
                array(
                    'key' => 'field_linked_products',
                    'label' => 'Linked Products',
                    'name' => 'linked_products',
                    'type' => 'post_object',
                    'post_type' => array('product'),
                    'multiple' => 1,
                    'return_format' => 'id',
                ),
                array(
                    'key' => 'field_linked_articles',
                    'label' => 'Linked Articles/Pages',
                    'name' => 'linked_articles',
                    'type' => 'post_object',
                    'post_type' => array('post', 'page'),
                    'multiple' => 1,
                    'return_format' => 'id',
                ),
                array(
                    'key' => 'field_banner_image',
                    'label' => 'Banner Image',
                    'name' => 'banner_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'required' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'resource_vault',
                    ),
                ),
            ),
            'style' => 'default',
            'position' => 'normal',
            'menu_order' => 0,
        ));
    endif;
}
