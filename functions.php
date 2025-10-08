<?php
if ( ! defined('ABSPATH') ) exit;

// Suportes do tema
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
  add_theme_support('align-wide');
});

// Enqueue CSS/JS (pai + filho)
add_action('wp_enqueue_scripts', function () {
  // CSS do tema pai
  wp_enqueue_style(
    'hello-parent',
    get_template_directory_uri() . '/style.css',
    [],
    wp_get_theme('hello-elementor')->get('Version')
  );

  // CSS do child
  wp_enqueue_style(
    'hello-child',
    get_stylesheet_uri(),
    ['hello-parent'],
    wp_get_theme()->get('Version')
  );

  // CSS principal do child
  wp_enqueue_style(
    'hello-child-main',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    ['hello-child'],
    '1.0'
  );

  // JS do child (se precisar)
  wp_enqueue_script(
    'hello-child-js',
    get_stylesheet_directory_uri() . '/assets/js/main.js',
    ['jquery'],
    '1.0',
    true
  );
});