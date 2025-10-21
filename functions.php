<?php

/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Add theme support for features.
function globalizer_theme_support() {
    // Add support for title tag.
    add_theme_support( 'title-tag' );

    // Add support for post thumbnails.
    add_theme_support( 'post-thumbnails' );

    // Add support for automatic feed links.
    add_theme_support( 'automatic-feed-links' );

    // Add support for custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'globalizer' ),
        'footer' => __( 'Footer Menu', 'globalizer' ),
    ) );
}
add_action( 'after_setup_theme', 'globalizer_theme_support' );


//Load include file
require_once get_template_directory() . '/inc/enqueue.php';
//require_once get_template_directory() . '/inc/menu-fields.php';
//require_once get_template_directory() . '/inc/class-walker.php';
require_once get_template_directory() . '/inc/toc.php';
require_once get_template_directory() . '/inc/login-page.php';
require_once get_template_directory() . '/inc/post-views.php';
require_once get_template_directory() . '/template-parts/components/pagination.php';
require_once get_template_directory() . '/template-parts/components/breadcrumb.php';

// Modify search query to only show posts
function globalizer_modify_search_query($query) {
    if ($query->is_search() && !is_admin()) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_action('pre_get_posts', 'globalizer_modify_search_query');



/**
 * satup all pages puth location like "/page/page-about-us.php"
 */
function innovera_page_template($template) {
    if (is_page()) {
        $page_slug = get_post_field('post_name', get_queried_object_id());
        $custom_template = locate_template('page/page-' . $page_slug . '.php');
        if ($custom_template) {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'innovera_page_template');    




/*==================
ACF Functions Start
===================*/
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
//add_filter('acf/settings/show_admin', '__return_false');

// When including the PRO plugin, hide the ACF Updates menu
add_filter('acf/settings/show_updates', '__return_false', 100);

// ACF notice Hide
add_action('admin_head', 'hide_acf_license_notice');

function hide_acf_license_notice() {
    ?>
    <style>
        .acf-admin-notice {
            display: none !important;
        }
        .acf-nav-upgrade-wrap{
            display: none !important;
        }
        .acf-wp-engine {
            display: none !important;
        }
        #tmpl-acf-field-group-pro-features{
            display: none !important;
        }
    </style>
    <?php
}
/*==================
ACF Functions End
===================*/
