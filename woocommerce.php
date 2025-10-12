<?php
/**
 * The template for displaying WooCommerce pages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php woocommerce_content(); ?>
    </main>
</div>

<?php get_footer(); ?>
