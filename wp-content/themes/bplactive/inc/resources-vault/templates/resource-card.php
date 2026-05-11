<?php
/**
 * Resource card template for archive and AJAX
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$resource_id = get_the_ID();
$file = get_field('resource_file', $resource_id);
$file_type = $file ? pathinfo($file['url'], PATHINFO_EXTENSION) : '';
$file_size = $file ? bpl_get_file_size($file['url']) : '';
$thumb = get_the_post_thumbnail_url($resource_id, 'medium') ?: BPL_RESOURCES_VAULT_URL . 'assets/images/default-resource.png';
?>
<div class="bpl-resource-card">
    <div class="bpl-resource-thumb"><img src="<?php echo esc_url($thumb); ?>" alt=""></div>
    <div class="bpl-resource-info">
        <h3 class="bpl-resource-title"><?php the_title(); ?></h3>
        <div class="bpl-resource-excerpt"><?php the_excerpt(); ?></div>
        <div class="bpl-resource-meta">
            <?php if ($file_type): ?><span class="bpl-resource-type"><?php echo esc_html(strtoupper($file_type)); ?></span><?php endif; ?>
            <?php if ($file_size): ?><span class="bpl-resource-size"><?php echo esc_html($file_size); ?></span><?php endif; ?>
        </div>
        <button class="bpl-resource-download" data-resource="<?php echo esc_attr($resource_id); ?>"><?php esc_html_e('Download', 'bplactive'); ?></button>
    </div>
</div>
