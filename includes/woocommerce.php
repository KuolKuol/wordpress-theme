<?php

/**
 * Woocommrce.php
 * ============================================================================================
 * Description:
 * This file contains all woocommerce logic for the theme
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 * 
 */

function placeholder_woocommerce_support() {
    
    // add woocommmerce support
    add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
    
    // disable all woocommerce stylesheets
    // add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

}
