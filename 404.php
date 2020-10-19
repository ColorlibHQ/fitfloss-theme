<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

	//  Call Header
	get_header();

	/**
	 * 404 page
	 * @Hook fitfloss_fof
	 * @Hooked fitfloss_fof_cb
	 *
	 */

	do_action( 'fitfloss_fof' );

	 // Call Footer
	 get_footer();
?>