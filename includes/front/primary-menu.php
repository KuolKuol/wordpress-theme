<?php

/**
* primary-menu.php
* ============================================================================
* Description:
* This file is for all the primary navigation logic 
* including functions. This is to be imported using 
* the include function on the frontend of the website. 
* ----------------------------------------------------------------------------
* @link https://developer.wordpress.org/themes/functionality/navigation-menus/
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/

// Determines whether a registered nav menu location has a menu assigned to it.
if( has_nav_menu( 'primary' ) ) {
    // Displays a navigation menu.
    wp_nav_menu( [
       'theme_location' => 'primary' ,
       'container'      =>  false,
       'menu_class'     => 'row column',
       'fallback_cb'    => false,
       'depth'          => 0
    ] );
}