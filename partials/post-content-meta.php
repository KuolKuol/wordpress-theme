<?php
/**
* post-conteent-meta.php
* ============================================================================
* Description:
* Template to be included in post loop. Outputs posts meta information.
* Includes:
* - Author
* - Date
* - Category  
* ----------------------------------------------------------------------------
* @package WordPress
* @subpackage Placeholder_Theme
* @since 1.0.0
*/
?>

<ul class="row">
    
    <li class="column">
        <i class="far fa-calendar"></i>
        <a href="<?php echo esc_url( get_month_link( false, false, false ) ); ?>"><?php echo get_the_date(); ?></a>
    </li>

    <li class="column">
    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>">

        <i class="fas fa-user-alt"></i>
        <?php the_author(); ?>
        </a>
    </li>

    <li class="column">
    
        <i class="fas fa-folder-open"></i>                    

        <?php 

            $category = get_the_category();

            if ( $category[0] ) {
                echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
            }
        ?>

    </li>

    <li class="column">
        <a href="<?php the_permalink().'#comments'; ?>">       
            <i class="fas fa-comment"></i>     
            <?php comments_number( '0'); ?>
        </a>
    </li>

</ul>