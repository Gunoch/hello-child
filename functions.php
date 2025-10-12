<?php
/**
 * Theme bootstrap for the Hello Child theme.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'HELLO_CHILD_VERSION' ) ) {
    define( 'HELLO_CHILD_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( 'HELLO_CHILD_ASSETS_URL' ) ) {
    define( 'HELLO_CHILD_ASSETS_URL', get_stylesheet_directory_uri() . '/assets' );
}

if ( ! defined( 'HELLO_CHILD_ASSETS_PATH' ) ) {
    define( 'HELLO_CHILD_ASSETS_PATH', get_stylesheet_directory() . '/assets' );
}

add_action( 'after_setup_theme', function () {
    load_child_theme_textdomain( 'hello-child', get_stylesheet_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/main.css' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    add_theme_support( 'woocommerce', [
        'thumbnail_image_width' => 400,
        'single_image_width'    => 800,
        'product_grid'          => [
            'default_rows'    => 4,
            'min_rows'        => 1,
            'max_rows'        => 6,
            'default_columns' => 3,
            'min_columns'     => 1,
            'max_columns'     => 4,
        ],
    ] );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
} );

add_action( 'elementor/theme/register_locations', function ( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'hello-parent',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( 'hello-elementor' )->get( 'Version' )
    );

    wp_enqueue_style(
        'hello-child',
        get_stylesheet_uri(),
        [ 'hello-parent' ],
        HELLO_CHILD_VERSION
    );

    $main_css = HELLO_CHILD_ASSETS_PATH . '/css/main.css';

    wp_enqueue_style(
        'hello-child-main',
        HELLO_CHILD_ASSETS_URL . '/css/main.css',
        [ 'hello-child' ],
        file_exists( $main_css ) ? filemtime( $main_css ) : HELLO_CHILD_VERSION
    );

    $main_js = HELLO_CHILD_ASSETS_PATH . '/js/main.js';

    wp_enqueue_script(
        'hello-child-js',
        HELLO_CHILD_ASSETS_URL . '/js/main.js',
        [ 'jquery' ],
        file_exists( $main_js ) ? filemtime( $main_js ) : HELLO_CHILD_VERSION,
        true
    );
} );

add_filter( 'woocommerce_enqueue_styles', function ( $styles ) {
    if ( isset( $styles['woocommerce-general']['has_rtl'] ) ) {
        unset( $styles['woocommerce-general']['has_rtl'] );
    }

    return $styles;
} );
