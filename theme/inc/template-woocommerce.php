<?php

function mytheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// Remove style
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Remove gallery fx
// remove_theme_support( 'wc-product-gallery-zoom' );
// remove_theme_support( 'wc-product-gallery-lightbox' );
// remove_theme_support( 'wc-product-gallery-slider' );