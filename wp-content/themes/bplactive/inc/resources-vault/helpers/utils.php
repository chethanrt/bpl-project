<?php
/**
 * Utility functions for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_get_file_size($file_url) {
    $headers = get_headers($file_url, 1);
    if ( isset($headers['Content-Length']) ) {
        $bytes = (int) $headers['Content-Length'];
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } else {
            $bytes = $bytes . ' bytes';
        }
        return $bytes;
    }
    return '';
}
