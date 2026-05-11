<?php


// Enqueue theme styles

function bplactive_enqueue_assets() {
	wp_enqueue_style( 'bplactive-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'bplactive-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0' );
	if ( is_front_page() ) {
		wp_enqueue_style( 'bplactive-home', get_template_directory_uri() . '/assets/css/homestyle.css', array(), '1.0' );
	}
	wp_enqueue_script( 'bplactive-header', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'bplactive_enqueue_assets' );

// Custom walker for submenu support
class BPL_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"sub-menu\">\n";
	}
	function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if (in_array('menu-item-has-children', $classes)) {
			$classes[] = 'has-submenu';
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$output .= '<li' . $class_names . '>';
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = $args->before;
		$item_output .= '<a'. $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

// Theme setup for classic theme architecture
function bplactive_theme_setup() {
	// Add support for menus
	add_theme_support( 'menus' );
	// Add support for post thumbnails
	add_theme_support( 'post-thumbnails' );
	// Add support for HTML5 markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	// Register primary menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bplactive' ),
	) );
}
add_action( 'after_setup_theme', 'bplactive_theme_setup' );

?>