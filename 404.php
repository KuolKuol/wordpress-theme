<?php
/**
* 404.php
* ============================================================================
* Description:
* This template page is important to add into your theme in case a user stumbles upon 
* a page that doesn’t exist or hasn’t been created yet. It is also important that your 
* 404 page gives your visitors a way to arrive at the right place.
* ----------------------------------------------------------------------------
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?>

<?php get_header(); ?>

<!-------------------------------- Content -------------------------------->
<section class="content">

    <!----------------------------- container ----------------------------->
    <div class="container">

        <!------------------------------ row ------------------------------>
        <div class="row">

            <!-------------------------------- column -------------------------------->
            <div class="column">
                <h2><?php _e( 'Page Not Found', 'placeholder' ); ?></h2>
                <span>404</span>
            </div><!-- .column -->

            <!-------------------------------- column -------------------------------->
            <div class="column">
                <h2><?php _e( "Ooopps! The Page you were looking for, couldn't be found.", 'placeholder' ); ?></h2>
                <span><?php _e( 'Try searching for the best match or browse the links below:', 'placeholder' ); ?></span>
                <?php get_search_form(); ?>
            </div> <!-- .column -->

        </div><!-- .row -->

    </div><!-- .container -->

</section><!-- .content end -->

<?php get_footer(); ?>