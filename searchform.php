<?php
/**
* searchform.php
* ============================================================================
* Description:
* Search form template.
* ----------------------------------------------------------------------------
* @link https://developer.wordpress.org/reference/functions/get_search_form/
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?>

<?php $unique_id = esc_attr( uniqid( 'search-form' ) ); ?>

<form role="search" method="get" class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" id="<?php echo $unique_id; ?>"
               class="form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="button button-outline">
                <i class="far fa-arrow-alt-circle-right"></i>               
                <span>search</span>           
            </button>
        </span>
    </div>
</form>