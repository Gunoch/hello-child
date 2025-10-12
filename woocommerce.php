<?php
/**
 * Template loader for WooCommerce content within Hello Child.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<div id="primary" class="content-area woocommerce-content">
    <main id="main" class="site-main" role="main">
        <?php woocommerce_content(); ?>
    </main>
</div>
<?php
get_footer();
