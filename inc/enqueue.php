<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bizmend_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');

    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_style('wp-block-library-theme');

    wp_dequeue_style('wp-block-site-logo');
    wp_deregister_style('wp-block-site-logo');

    wp_dequeue_style('wp-block-navigation');
    wp_deregister_style('wp-block-navigation');

    wp_dequeue_style('classic-theme-styles');
    wp_deregister_style('classic-theme-styles');

    wp_dequeue_style('global-styles');
    wp_deregister_style('global-styles');
    
    // Remove jQuery if not needed
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');

    wp_deregister_script('jquery');
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery-migrate');
}
add_action('wp_print_styles', 'bizmend_dequeue_block_styles', 100);

function bizmend_disable_block_editor_assets() {
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_footer', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('after_setup_theme', 'bizmend_disable_block_editor_assets');


// Enqueue theme stylesheet.
function bizmend_enqueue_styles() {
    wp_enqueue_style( 'bizmend-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bizmend-tailwind', get_template_directory_uri() . '/src/css/main.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'bizmend-main-js', get_template_directory_uri() . '/src/js/main.js', array(), '1.0', true);
    wp_enqueue_script( 'bizmend-mobile-menu', get_template_directory_uri() . '/src/js/mobile-menu.js', array(), '1.0', true);
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'bizmend_enqueue_styles' );

// Defer scripts
function bizmend_add_defer_attribute( $tag, $handle ) {
    $scripts_to_defer = ['bizmend-main-js', 'bizmend-mobile-menu'];

    foreach ( $scripts_to_defer as $defer_script ) {
        if ( $defer_script === $handle ) {
            return str_replace( ' src', ' defer src', $tag );
        }
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'bizmend_add_defer_attribute', 10, 2 );