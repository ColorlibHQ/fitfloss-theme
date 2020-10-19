<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Fitfloss
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$fitfloss_instagram_userid      	= !empty( fitfloss_opt( 'fitfloss_instagram_userid' ) ) ? fitfloss_opt( 'fitfloss_instagram_userid' ) : 'colorlib';
	$fitfloss_instagram_gallery_item = !empty( fitfloss_opt( 'fitfloss_instagram_gallery_item' ) ) ? fitfloss_opt( 'fitfloss_instagram_gallery_item' ) : '5';
	?>
	
    <!-- instragram_area_start -->
    <div class="instragram_area" data-username="<?php echo esc_attr( $fitfloss_instagram_userid )?>" data-items="<?php echo esc_attr( $fitfloss_instagram_gallery_item )?>"></div>
    <!-- instragram_area_end -->