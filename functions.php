<?php
/**
 * Funções principais do tema Hello Child.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Registra os suportes do tema filho.
 *
 * @return void
 */
function hello_child_setup_theme(): void {
  load_child_theme_textdomain( 'hello-child', get_stylesheet_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'hello_child_setup_theme' );

/**
 * Recupera a versão que deve ser usada como *cache buster* para um ativo.
 *
 * @param string $relative_path Caminho relativo ao diretório do tema filho.
 * @param string $fallback      Versão utilizada caso o arquivo não exista.
 *
 * @return string
 */
function hello_child_get_asset_version( string $relative_path, string $fallback ): string {
  $absolute_path = trailingslashit( get_stylesheet_directory() ) . ltrim( $relative_path, '/' );

  if ( file_exists( $absolute_path ) ) {
    return (string) filemtime( $absolute_path );
  }

  return $fallback;
}

/**
 * Enfileira os arquivos de estilos e scripts do tema pai e do tema filho.
 *
 * @return void
 */
function hello_child_enqueue_assets(): void {
  $theme          = wp_get_theme();
  $theme_version  = $theme->get( 'Version' );
  $parent_theme   = wp_get_theme( 'hello-elementor' );
  $parent_version = $parent_theme->exists() ? $parent_theme->get( 'Version' ) : $theme_version;

  $stylesheet_uri = get_stylesheet_directory_uri();
  $template_uri   = get_template_directory_uri();

  wp_enqueue_style(
    'hello-parent',
    $template_uri . '/style.css',
    [],
    $parent_version
  );

  wp_enqueue_style(
    'hello-child',
    $stylesheet_uri . '/style.css',
    [ 'hello-parent' ],
    $theme_version
  );

  $main_css_relative = 'assets/css/main.css';
  $main_css_path     = trailingslashit( get_stylesheet_directory() ) . $main_css_relative;

  if ( file_exists( $main_css_path ) ) {
    wp_enqueue_style(
      'hello-child-main',
      $stylesheet_uri . '/' . $main_css_relative,
      [ 'hello-child' ],
      hello_child_get_asset_version( $main_css_relative, $theme_version )
    );
  }

  $main_js_relative = 'assets/js/main.js';
  $main_js_path     = trailingslashit( get_stylesheet_directory() ) . $main_js_relative;

  if ( file_exists( $main_js_path ) ) {
    wp_enqueue_script(
      'hello-child-js',
      $stylesheet_uri . '/' . $main_js_relative,
      [ 'jquery' ],
      hello_child_get_asset_version( $main_js_relative, $theme_version ),
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_assets' );
