<?php
/**
 * Database schema for Resources Vault (dbDelta)
 * Creates resource_download_logs and resource_leads tables
 */
if ( ! defined( 'ABSPATH' ) ) exit;

register_activation_hook( get_template_directory() . '/functions.php', 'bpl_resource_vault_create_tables' );
function bpl_resource_vault_create_tables() {
    global $wpdb;
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    $charset_collate = $wpdb->get_charset_collate();
    $download_logs = $wpdb->prefix . 'resource_download_logs';
    $leads = $wpdb->prefix . 'resource_leads';
    $sql = "CREATE TABLE $download_logs (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        resource_id bigint(20) unsigned NOT NULL,
        user_id bigint(20) unsigned DEFAULT NULL,
        ip varchar(45) DEFAULT NULL,
        downloaded_at datetime NOT NULL,
        PRIMARY KEY  (id),
        KEY resource_id (resource_id)
    ) $charset_collate;";
    $sql2 = "CREATE TABLE $leads (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        resource_id bigint(20) unsigned NOT NULL,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        company varchar(255),
        phone varchar(50),
        country varchar(100),
        job_title varchar(100),
        consent tinyint(1) DEFAULT 0,
        ip varchar(45),
        referrer varchar(255),
        created_at datetime NOT NULL,
        PRIMARY KEY  (id),
        KEY resource_id (resource_id),
        KEY email (email)
    ) $charset_collate;";
    dbDelta($sql);
    dbDelta($sql2);
}
