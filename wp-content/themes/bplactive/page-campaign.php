<?php
/*
Template Name: Campaign Landing Page
Description: Flexible campaign page with hero, content sections, and form. Uses ACF for content fields.
*/
get_header();
?>
<main id="main" class="site-main campaign-landing">
    <?php if ( function_exists('get_field') ) : ?>
        <section class="hero-banner" style="background-image:url('<?php the_field('hero_background'); ?>');">
            <div class="container">
                <h1><?php the_field('hero_title'); ?></h1>
                <p><?php the_field('hero_subtitle'); ?></p>
            </div>
        </section>
        <section class="section-1">
            <div class="container">
                <h2><?php the_field('section_1_title'); ?></h2>
                <div class="section-content"><?php the_field('section_1_content'); ?></div>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <h2><?php the_field('section_2_title'); ?></h2>
                <div class="section-content"><?php the_field('section_2_content'); ?></div>
            </div>
        </section>
        <section class="section-3">
            <div class="container">
                <h2><?php the_field('section_3_title'); ?></h2>
                <div class="section-content"><?php the_field('section_3_content'); ?></div>
            </div>
        </section>
        <section class="campaign-form">
            <div class="container">
                <h2><?php the_field('form_title'); ?></h2>
                <?php if ( get_field('form_shortcode') ) : ?>
                    <?php echo do_shortcode( get_field('form_shortcode') ); ?>
                <?php endif; ?>
            </div>
        </section>
    <?php else : ?>
        <p>ACF plugin is required for this template.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
