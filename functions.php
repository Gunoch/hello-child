<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo', [
        'height'      => 120,
        'width'       => 120,
        'flex-width'  => true,
        'flex-height' => true,
    ] );

    register_nav_menus( [
        'primary' => __( 'Menu principal Bellona', 'hello-child' ),
        'footer'  => __( 'Menu de rodapé Bellona', 'hello-child' ),
    ] );

    add_image_size( 'bellona-portrait', 640, 800, true );
    add_image_size( 'bellona-landscape', 960, 640, true );

    add_theme_support( 'editor-color-palette', [
        [
            'name'  => __( 'Violeta Bellona', 'hello-child' ),
            'slug'  => 'bellona-eggplant',
            'color' => '#2B183B',
        ],
        [
            'name'  => __( 'Creme Pérola', 'hello-child' ),
            'slug'  => 'bellona-cream',
            'color' => '#F7F3EF',
        ],
        [
            'name'  => __( 'Dourado Luxo', 'hello-child' ),
            'slug'  => 'bellona-gold',
            'color' => '#D4AF37',
        ],
        [
            'name'  => __( 'Rosa Vintage', 'hello-child' ),
            'slug'  => 'bellona-rose',
            'color' => '#C197A3',
        ],
        [
            'name'  => __( 'Grafite Chic', 'hello-child' ),
            'slug'  => 'bellona-charcoal',
            'color' => '#1E1B26',
        ],
    ] );

    add_theme_support( 'editor-font-sizes', [
        [
            'name' => _x( 'Pequeno', 'editor font size', 'hello-child' ),
            'size' => 14,
            'slug' => 'small',
        ],
        [
            'name' => _x( 'Padrão', 'editor font size', 'hello-child' ),
            'size' => 18,
            'slug' => 'normal',
        ],
        [
            'name' => _x( 'Médio', 'editor font size', 'hello-child' ),
            'size' => 22,
            'slug' => 'medium',
        ],
        [
            'name' => _x( 'Grande', 'editor font size', 'hello-child' ),
            'size' => 30,
            'slug' => 'large',
        ],
        [
            'name' => _x( 'Hero', 'editor font size', 'hello-child' ),
            'size' => 42,
            'slug' => 'hero',
        ],
    ] );
} );

add_filter( 'image_size_names_choose', function ( $sizes ) {
    $sizes['bellona-portrait']  = __( 'Retrato Bellona', 'hello-child' );
    $sizes['bellona-landscape'] = __( 'Paisagem Bellona', 'hello-child' );

    return $sizes;
} );

add_filter( 'body_class', function ( $classes ) {
    $classes[] = 'bellona-kit';

    return $classes;
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'bellona-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'hello-parent',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( 'hello-elementor' )->get( 'Version' )
    );

    wp_enqueue_style(
        'hello-child',
        get_stylesheet_uri(),
        [ 'hello-parent', 'bellona-fonts' ],
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'hello-child-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        [ 'hello-child' ],
        '1.0'
    );

    wp_enqueue_script(
        'hello-child-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [ 'jquery' ],
        '1.0',
        true
    );
} );
