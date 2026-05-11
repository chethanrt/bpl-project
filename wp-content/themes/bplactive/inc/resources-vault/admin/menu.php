<?php
/**
 * Register Resource Leads admin menu
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('admin_menu', 'bpl_resource_leads_admin_menu');
function bpl_resource_leads_admin_menu() {
    add_menu_page(
        __('Resource Leads', 'bplactive'),
        __('Resource Leads', 'bplactive'),
        'manage_options',
        'bpl_resource_leads',
        'bpl_resource_leads_page',
        'dashicons-groups',
        26
    );
}

function bpl_resource_leads_page() {
    // Placeholder: actual leads list is in leads-list.php
    echo '<div class="wrap"><h1>' . esc_html__('Resource Leads', 'bplactive') . '</h1></div>';
}
