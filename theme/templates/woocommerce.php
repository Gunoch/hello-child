<?php
/**
 * Template responsável por exibir as páginas WooCommerce.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php woocommerce_content(); ?>
  </main>
</div>

<?php get_footer(); ?>
