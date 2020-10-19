<?php
/**
* header.php
* ============================================================================
* Description:
* Header template includes navigation bar and other related items
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?>

<!DOCTYPE html>
<!-- language_attributes() Displays the language attributes for the html tag. -->
<html <?php language_attributes(); ?>>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />    

    <!-- bloginfo('charset') Displays the “Encoding for pages and feeds” -->
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

    <!-- wp_head() Fire the wp_head action which Prints scripts or data in the head tag on the front end. -->
    <?php wp_head(); ?>

</head>

<!-- body_class() Displays the class names for the body element. -->
<body <?php body_class( 'body' ); ?>>

        <!-- Header -->
        <header id="header" class="header container">
            
            <!-- container -->
            <div class="">

                <!-- Logo -->
                <div class="logo">

                    <?php if( has_custom_logo() ): ?>

                        <?php the_custom_logo();?>

                    <?php else: ?>

                        <a href="<?php echo home_url( '/' ); ?>" class="standard-logo"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>

                </div><!-- .logo end -->

            </div> <!-- container -->

            <div id="container">

                <!-- Primary Menu -->
                <nav id="primary-menu" class="primary-menu">

                    <div class="row">

                        <?php
                            // Determines whether a registered nav menu location has a menu assigned to it.
                            if( has_nav_menu( 'primary' ) ){
                                // Displays a navigation menu.
                                wp_nav_menu([
                                    'theme_location'        =>  'primary',
                                    'container'             =>  false,
                                    'fallback_cb'           =>  false,
                                    'depth'                 =>  4,
                                ]);
                            }
                        ?>

                    </div><!-- row -->
                    
                </nav><!-- #primary-menu end -->

            </div> <!-- container -->

        </header><!-- #header end -->