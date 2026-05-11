<?php
/**
 * Nonce helpers for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_resources_vault_create_nonce() {
    return wp_create_nonce('bpl_resources_vault');
}

function bpl_resources_vault_verify_nonce($nonce) {
    return wp_verify_nonce($nonce, 'bpl_resources_vault');
}
