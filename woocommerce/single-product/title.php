<?php
/**
 * Single product title template override.
 *
 * @package HelloChild\WooCommerce
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

the_title( '<h1 class="product_title entry-title custom-title">', '</h1>' );
