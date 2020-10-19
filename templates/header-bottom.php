<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Fitfloss
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Header background image oparation

$header_sub_title   = fitfloss_meta( 'page_subtitle' );
$headerimg          = get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo fitfloss_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'fitfloss') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'fitfloss') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'fitfloss' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'fitfloss' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'fitfloss' );

                    }
                    ?>
                </h2>
                <p><?php echo wp_kses_post( nl2br( $header_sub_title ) )?></p>
            </div>
        </div>
    </div>
</section>