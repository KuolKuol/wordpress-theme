<?php

/**
* walker-menu.php
* ============================================================================
* Description:
* This file is for all the walker navigation logic 
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
if( has_nav_menu( 'walker' ) ) {
    // displays the menu
    wp_nav_menu( [
       'theme_location' => 'walker' ,
       'container'      =>  false,
       'menu_class'     => 'Class1 Class2',
       'fallback_cb'    => false,
       'depth'          => 0,
       'walker'         => new Placeholder_Custom_Nav_Walker()
    ] );
}