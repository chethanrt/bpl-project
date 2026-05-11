<?php
/**
 * Output resource filters for archive page
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_resource_vault_filters() {
    ?>
    <form id="bpl-resource-filters" class="bpl-resource-filters" method="get" action="">
        <select name="resource_category">
            <option value="">Category</option>
            <?php foreach ( get_terms('resource_category', array('hide_empty'=>false)) as $cat ) : ?>
                <option value="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></option>
            <?php endforeach; ?>
        </select>
        <select name="industry">
            <option value="">Industry</option>
            <?php foreach ( get_terms('industry', array('hide_empty'=>false)) as $ind ) : ?>
                <option value="<?php echo esc_attr($ind->slug); ?>"><?php echo esc_html($ind->name); ?></option>
            <?php endforeach; ?>
        </select>
        <select name="resource_type">
            <option value="">Type</option>
            <?php foreach ( get_terms('resource_type', array('hide_empty'=>false)) as $type ) : ?>
                <option value="<?php echo esc_attr($type->slug); ?>"><?php echo esc_html($type->name); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="s" placeholder="Search resources..." value="<?php echo esc_attr(get_query_var('s')); ?>">
        <button type="submit">Filter</button>
    </form>
    <?php
}
