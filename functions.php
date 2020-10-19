<?php
/**
* functions.php
* ============================================================================
* Description:
* This file can be thought of as your themes logic. 
* It is used to define functions, classes, actions and 
* filters to be used by other templates in the theme. 
* It can be used to add features and extend the functionality 
* of both the theme, and the WordPress installation.
* ----------------------------------------------------------------------------
* @link https://developer.wordpress.org/themes/basics/theme-functions/
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/


/**
* SETUP
* ============================================================================
* Description:
* Variables and functions that must be available throughout theme
*/


/*
* DEVELOPMENT MODE CONSTANT
* ============================================================================
* Description:
* Prevents caching in development mode.
* NOTE: Turn back to false when site is about to be deployed
*/
 
define( 'PLACEHOLDER_DEV_MODE', true );


/**
* INCLUDES
* ============================================================================
* Description:
* This section is reserved for including files.
*/

// includes enqueue.php
include( get_theme_file_path( './includes/front/enqueue.php' ) );

// includes setup.php
include( get_theme_file_path( './includes/setup.php' ) );

// includes custom-nav-walker.php
include( get_theme_file_path( './includes/custom-nav-walker.php' ) );

// includes widgets.php
include( get_theme_file_path( './includes/widgets.php' ) );

// includes breadcrumb.php
include( get_theme_file_path( './includes/front/breadcrumb.php' ) );

// includes woocommerce.php
include( get_theme_file_path( './includes/woocommerce.php' ) );


/**
* HOOKS
* ============================================================================
* Description:
* This section is reserved for any filters and action hooks.
* @link https://codex.wordpress.org/Plugin_API/Hooks
*/


/**
* Action HOOKS
* ============================================================================
* Description:
* An action is a way for you to listen to events and execute code when that event happens. 
* This is what Wordpress calls the plugin API
* @link https://codex.wordpress.org/Plugin_API/Action_Reference
*/


// Enqueue scripts action hook
add_action( 'wp_enqueue_scripts' , 'placeholder_scripts' );

// Theme setup 
add_action('after_setup_theme','placeholder_setup_theme');

// Widgets
add_action('widgets_init','placeholder_widgets');

// Woocommerce
add_action( 'after_setup_theme', 'placeholder_woocommerce_support' );

/* FILTERS
==================================================
For filters
*/

/* SHORTCODES
==================================================
For shortcodes
*/