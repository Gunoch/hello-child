<?php
/**
 * Configurações principais do tema Hello Child.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'HELLO_CHILD_THEME_DIR' ) || ! defined( 'HELLO_CHILD_THEME_URI' ) ) {
  return;
}

/**
 * Recupera um caminho absoluto dentro da pasta `theme`.
 *
 * @param string $relative Caminho relativo a partir de `theme`.
 *
 * @return string
 */
function hello_child_theme_path( string $relative = '' ): string {
  $base = trailingslashit( HELLO_CHILD_THEME_DIR );

  return $relative ? $base . ltrim( $relative, '/' ) : $base;
}

/**
 * Recupera uma URL dentro da pasta `theme`.
 *
 * @param string $relative Caminho relativo a partir de `theme`.
 *
 * @return string
 */
function hello_child_theme_uri( string $relative = '' ): string {
  $base = trailingslashit( HELLO_CHILD_THEME_URI );

  return $relative ? $base . ltrim( $relative, '/' ) : $base;
}

/**
 * Registra os suportes do tema filho e o *textdomain*.
 *
 * @return void
 */
function hello_child_setup_theme(): void {
  load_child_theme_textdomain( 'hello-child', hello_child_theme_path( 'languages' ) );

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
 * Recupera a versão utilizada como *cache buster* para um ativo.
 *
 * @param string $relative_path Caminho relativo dentro de `theme`.
 * @param string $fallback      Valor utilizado quando o arquivo não existe.
 *
 * @return string
 */
function hello_child_get_asset_version( string $relative_path, string $fallback ): string {
  $absolute_path = hello_child_theme_path( $relative_path );

  if ( file_exists( $absolute_path ) ) {
    return (string) filemtime( $absolute_path );
  }

  return $fallback;
}

/**
 * Enfileira estilos e scripts do tema.
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
  $main_css_path     = hello_child_theme_path( $main_css_relative );

  if ( file_exists( $main_css_path ) ) {
    wp_enqueue_style(
      'hello-child-main',
      hello_child_theme_uri( $main_css_relative ),
      [ 'hello-child' ],
      hello_child_get_asset_version( $main_css_relative, $theme_version )
    );
  }

  $main_js_relative = 'assets/js/main.js';
  $main_js_path     = hello_child_theme_path( $main_js_relative );

  if ( file_exists( $main_js_path ) ) {
    wp_enqueue_script(
      'hello-child-js',
      hello_child_theme_uri( $main_js_relative ),
      [ 'jquery' ],
      hello_child_get_asset_version( $main_js_relative, $theme_version ),
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_assets' );

/**
 * Adiciona o template de políticas à lista de templates disponíveis nas páginas.
 *
 * @param array<string,string> $templates Lista de templates atuais.
 *
 * @return array<string,string>
 */
function hello_child_register_page_templates( array $templates ): array {
  $policy_template = 'theme/templates/page-policy.php';

  if ( file_exists( hello_child_theme_path( 'templates/page-policy.php' ) ) ) {
    $templates[ $policy_template ] = __( 'Políticas – Full Width', 'hello-child' );
  }

  return $templates;
}
add_filter( 'theme_page_templates', 'hello_child_register_page_templates' );

/**
 * Garante que o template personalizado de políticas seja carregado a partir da nova estrutura.
 *
 * @param string $template Caminho do template atualmente resolvido.
 *
 * @return string
 */
function hello_child_load_page_template( string $template ): string {
  $policy_template = 'theme/templates/page-policy.php';

  if ( is_page() ) {
    $page_template = get_page_template_slug();

    if ( $policy_template === $page_template ) {
      $custom_template = hello_child_theme_path( 'templates/page-policy.php' );

      if ( file_exists( $custom_template ) ) {
        return $custom_template;
      }
    }
  }

  return $template;
}
add_filter( 'template_include', 'hello_child_load_page_template', 20 );

/**
 * Permite que o WooCommerce localize templates dentro de `theme/templates/woocommerce`.
 *
 * @param string $template      Caminho padrão encontrado.
 * @param string $template_name Caminho relativo solicitado pelo WooCommerce.
 * @param string $template_path Caminho base do WooCommerce.
 *
 * @return string
 */
function hello_child_locate_woocommerce_template( string $template, string $template_name, string $template_path ): string {
  $custom_template = hello_child_theme_path( 'templates/woocommerce/' . $template_name );

  if ( file_exists( $custom_template ) ) {
    return $custom_template;
  }

  return $template;
}
add_filter( 'woocommerce_locate_template', 'hello_child_locate_woocommerce_template', 10, 3 );
