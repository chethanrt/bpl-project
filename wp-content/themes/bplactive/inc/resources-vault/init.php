<?php
/**
 * Loader for Resources Vault module
 * Loads all components, CPTs, taxonomies, admin, frontend, AJAX, security, helpers, assets, and DB schema
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Define base path
if ( ! defined( 'BPL_RESOURCES_VAULT_PATH' ) ) {
    define( 'BPL_RESOURCES_VAULT_PATH', get_template_directory() . '/inc/resources-vault/' );
}
if ( ! defined( 'BPL_RESOURCES_VAULT_URL' ) ) {
    define( 'BPL_RESOURCES_VAULT_URL', get_template_directory_uri() . '/inc/resources-vault/' );
}

// Helpers
require_once BPL_RESOURCES_VAULT_PATH . 'helpers/utils.php';
require_once BPL_RESOURCES_VAULT_PATH . 'helpers/product-link.php';
require_once BPL_RESOURCES_VAULT_PATH . 'helpers/schema.php';

// Security
require_once BPL_RESOURCES_VAULT_PATH . 'security/nonce.php';
require_once BPL_RESOURCES_VAULT_PATH . 'security/download-handler.php';

// Database
require_once BPL_RESOURCES_VAULT_PATH . 'database/schema.php';

// Post Types & Taxonomies
require_once BPL_RESOURCES_VAULT_PATH . 'post-types/resource-vault-cpt.php';
require_once BPL_RESOURCES_VAULT_PATH . 'taxonomies/resource-categories.php';
require_once BPL_RESOURCES_VAULT_PATH . 'taxonomies/resource-tags.php';
require_once BPL_RESOURCES_VAULT_PATH . 'taxonomies/industries.php';
require_once BPL_RESOURCES_VAULT_PATH . 'taxonomies/resource-types.php';

// ACF Fields
require_once BPL_RESOURCES_VAULT_PATH . 'acf/resource-fields.php';

// Admin
require_once BPL_RESOURCES_VAULT_PATH . 'admin/menu.php';
require_once BPL_RESOURCES_VAULT_PATH . 'admin/leads-list.php';
require_once BPL_RESOURCES_VAULT_PATH . 'admin/meta-boxes.php';
require_once BPL_RESOURCES_VAULT_PATH . 'admin/columns.php';
require_once BPL_RESOURCES_VAULT_PATH . 'admin/enqueue.php';

// Frontend
require_once BPL_RESOURCES_VAULT_PATH . 'frontend/archive-resources.php';
require_once BPL_RESOURCES_VAULT_PATH . 'frontend/single-resource.php';
require_once BPL_RESOURCES_VAULT_PATH . 'frontend/filters.php';
require_once BPL_RESOURCES_VAULT_PATH . 'frontend/modal.php';
require_once BPL_RESOURCES_VAULT_PATH . 'frontend/enqueue.php';

// AJAX
require_once BPL_RESOURCES_VAULT_PATH . 'ajax/filter.php';
require_once BPL_RESOURCES_VAULT_PATH . 'ajax/search.php';
require_once BPL_RESOURCES_VAULT_PATH . 'ajax/load-more.php';
require_once BPL_RESOURCES_VAULT_PATH . 'ajax/gated-download.php';
require_once BPL_RESOURCES_VAULT_PATH . 'ajax/analytics.php';

// Templates (autoloaded by frontend)
// assets loaded by enqueue.php
