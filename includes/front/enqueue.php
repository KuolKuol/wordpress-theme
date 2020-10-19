<?php

/**
* enqueue.php
* ============================================================================
* Description:
* This file is to be used for enqueueing scripts and styles into the theme.
* ----------------------------------------------------------------------------
* Valid file types include:
*
* - CSS Files 
* - Javscript Files
* - CDN's 
* ----------------------------------------------------------------------------
* @link https://developer.wordpress.org/themes/basics/including-css-javascript/
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/



// Runs when wp_enqueue_scripts action is fired.
function placeholder_scripts(){

    // Returns the theme’s root directory URI. Used for link paramater.
    $uri     = get_theme_file_uri();

    // Vrsion option to prevent caching in development mode.
    $version = PLACEHOLDER_DEV_MODE ? time() : false;

    /**
    * Register CSS Files
    * ============================================================================
    * Description:
    * wp_register_style() is used to register css stylesheets. Registering a style will tell WordPress about a where a stylesheet is located and 
    * make it available to be called later. 
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/wp_register_style/
    */

    // Registers roboto font using a Google Fonts CDN.
    wp_register_style('placeholder_roboto_font','//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic',[], $version);

    // Registers normalize.css using a Cloudflare CDN.
    wp_register_style('placeholder_normalize_css','//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css',[], $version);

    // Registers milligram.css using a Cloudflare CDN.
    wp_register_style('placeholder_milligram_css','//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css',[], $version);


    // Registers style.css located in the root directory
    wp_register_style('placeholder_style_css', $uri.'/style.css',[], $version);


    /**
    * Enqueueing CSS Files
    * ============================================================================
    * Description:
    * wp_enqueue_style() will instruct WordPress to load the stylesheet onto the page right away.
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    */

    // Enqueues roboto font.
    wp_enqueue_style('placeholder_roboto_font');

    // Enqueues normalize.css
    wp_enqueue_style('placeholder_normalize_css');

    // Enqueues milligram.css
    wp_enqueue_style('placeholder_milligram_css');
    
    // Enqueues style.css
    wp_enqueue_style('placeholder_style_css');


    /**
    * Register Javascript Files
    * ============================================================================
    * Description:
    * wp_register_script() is used to register javascript files. Registering a script 
    * will tell WordPress about a where a file is located and  make it available to be called later.
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/wp_register_script/
    */

    // Registers jquery through cdn 
    wp_register_script('placeholder_jquery_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',[], $version, true);
    
    // Registers index.js file
    wp_register_script('placeholder_index_js', $uri.'/js/index.js', [], $version, true);


    /**
    * Enqueueing Javascript Files
    * ============================================================================
    * Description:
    * wp_enqueue_script - Registers the scripts if source provided (does NOT overwrite) and enqueues. Enqueueing a script will instruct WordPress to * load the scripts onto the page right away.
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    */

    // Enqueues Jquery CDN 
    wp_enqueue_script('placeholder_jquery_js');

    // Enqueues index.js file
    wp_enqueue_script('placeholder_index_js');

}
