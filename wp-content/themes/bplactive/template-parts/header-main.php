<?php
/**
 * Template part for displaying the site header
 */
?>
<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bpl-logo.png" alt="BPL Logo" style="height:48px;max-width:120px;" onerror="this.style.display='none';">
            </a>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <nav class="site-navigation">
            <button id="menu-toggle" aria-controls="site-navigation-menu" aria-expanded="false" class="menu-toggle" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id' => 'site-navigation-menu',
                    'container' => false,
                    'walker' => new BPL_Walker_Nav_Menu(),
                ) );
            } else {
                echo '<span class="menu-placeholder">Menu will appear here (ACF integration coming soon)</span>';
            }
            ?>
        </nav>
    </div>
</header>
