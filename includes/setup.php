<?php
/**
* setup.php
* ============================================================================
* Description:
* This file is to be used for the general setup of the 
* theme. Some of the functions in this file will be 
* applied to both the frontend and backend of the website.
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/

function placeholder_setup_theme(){

    /**
    * Register Navigation Menus
    * ============================================================================
    * Description:
    * register_nav_menu() Registers a single custom Navigation Menu in the custom menu editor. 
    * This allows administration users to create custom menus for use in a theme. 
    * ----------------------------------------------------------------------------
    * @link https://codex.wordpress.org/Function_Reference/register_nav_menu
    * ----------------------------------------------------------------------------
    */

    // Registers Primary Menu
    register_nav_menu( 'primary', __('Primary Menu', 'placeholder') );

    // Registers Secondary Menu
    register_nav_menu( 'secondary', __('Secondary Menu', 'placeholder') );



    /**
    * Add Theme Support
    * ============================================================================
    * Description:
    * add_theme_support() Tells wordpress that you would like support for on of its build in features.
    * ----------------------------------------------------------------------------
    * @link https://developer.wordpress.org/reference/functions/add_theme_support/
    * ----------------------------------------------------------------------------
    */

    // enables post thumbail featured image 
    add_theme_support( 'post-thumbnails' );

    // enables plugins and themes to manage the document title tag 
    add_theme_support( 'title-tag' );

    // enables custom logos
    add_theme_support( 'custom-logo' );

    // adds RSS feed links to HTML <head>.
    add_theme_support( 'automatic-feed-links' );



}