<?php
/**
 * Breadcrumbs template for Resources Vault
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<nav class="bpl-breadcrumbs" aria-label="Breadcrumb">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> &raquo; 
    <a href="<?php echo esc_url(get_post_type_archive_link('resource_vault')); ?>">Resources</a>
    <?php if (is_singular('resource_vault')): ?>
        &raquo; <span><?php the_title(); ?></span>
    <?php endif; ?>
</nav>
