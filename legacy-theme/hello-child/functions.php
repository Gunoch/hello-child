<?php
/**
 * Bootstrap do tema Hello Child.
 *
 * Responsável por definir constantes globais e carregar os arquivos de
 * inicialização localizados em `theme/inc`.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'HELLO_CHILD_THEME_DIR' ) ) {
  define( 'HELLO_CHILD_THEME_DIR', trailingslashit( get_stylesheet_directory() ) . 'theme' );
}

if ( ! defined( 'HELLO_CHILD_THEME_URI' ) ) {
  define( 'HELLO_CHILD_THEME_URI', trailingslashit( get_stylesheet_directory_uri() ) . 'theme' );
}

$hello_child_includes = [
  HELLO_CHILD_THEME_DIR . '/inc/setup.php',
];

foreach ( $hello_child_includes as $include ) {
  if ( file_exists( $include ) ) {
    require_once $include;
  }
}
