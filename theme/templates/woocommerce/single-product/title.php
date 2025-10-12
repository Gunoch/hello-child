<?php
/**
 * Single product title wrapper.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 *
 * @package HelloChild\WooCommerce
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

the_title( '<h1 class="product_title entry-title custom-title">', '</h1>' );
