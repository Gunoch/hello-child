<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Configure theme supports for the child theme.
 */
function hello_child_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'hello_child_setup' );

/**
 * Helper to fetch a file modification time or fall back to the current theme version.
 *
 * @param string $absolute_path Absolute path to the asset file.
 * @param string $fallback_version Version used when the file does not exist.
 *
 * @return string|int
 */
function hello_child_get_asset_version( $absolute_path, $fallback_version ) {
    if ( file_exists( $absolute_path ) ) {
        $file_mtime = filemtime( $absolute_path );

        if ( false !== $file_mtime ) {
            return $file_mtime;
        }
    }

    return $fallback_version;
}

/**
 * Enqueue parent/child assets without duplicating handles.
 */
function hello_child_enqueue_assets() {
    $theme       = wp_get_theme();
    $parent      = $theme->parent();
    $parent_ver  = $parent instanceof \WP_Theme ? $parent->get( 'Version' ) : $theme->get( 'Version' );
    $child_ver   = $theme->get( 'Version' );
    $parent_file = get_template_directory() . '/style.css';
    $child_file  = get_stylesheet_directory() . '/style.css';

    $parent_handle = 'hello-child-parent-style';
    wp_enqueue_style(
        $parent_handle,
        get_template_directory_uri() . '/style.css',
        [],
        hello_child_get_asset_version( $parent_file, $parent_ver )
    );

    $child_handle = 'hello-child-style';
    wp_enqueue_style(
        $child_handle,
        get_stylesheet_uri(),
        [ $parent_handle ],
        hello_child_get_asset_version( $child_file, $child_ver )
    );

    $main_css_file = get_stylesheet_directory() . '/assets/css/main.css';
    if ( file_exists( $main_css_file ) ) {
        wp_enqueue_style(
            'hello-child-main',
            get_stylesheet_directory_uri() . '/assets/css/main.css',
            [ $child_handle ],
            hello_child_get_asset_version( $main_css_file, $child_ver )
        );
    }

    $main_js_file = get_stylesheet_directory() . '/assets/js/main.js';
    if ( file_exists( $main_js_file ) ) {
        wp_enqueue_script(
            'hello-child-scripts',
            get_stylesheet_directory_uri() . '/assets/js/main.js',
            [ 'jquery' ],
            hello_child_get_asset_version( $main_js_file, $child_ver ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_assets' );
