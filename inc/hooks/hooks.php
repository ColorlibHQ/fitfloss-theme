<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'fitfloss_preloader', 'fitfloss_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'fitfloss_header', 'fitfloss_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'fitfloss_footer', 'fitfloss_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'fitfloss_wrp_start', 'fitfloss_wrp_start_cb', 10 );
	add_action( 'fitfloss_wrp_end', 'fitfloss_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'fitfloss_blog_col_start', 'fitfloss_blog_col_start_cb', 10 );
	add_action( 'fitfloss_blog_col_end', 'fitfloss_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'fitfloss_blog_posts_thumb', 'fitfloss_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'fitfloss_blog_details_wrap_start', 'fitfloss_blog_details_wrap_start_cb', 10 );
	add_action( 'fitfloss_blog_details_wrap_end', 'fitfloss_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'fitfloss_blog_posts_title', 'fitfloss_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'fitfloss_blog_posts_meta', 'fitfloss_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'fitfloss_blog_posts_excerpt', 'fitfloss_blog_posts_excerpt_cb', 10 );
	// add_action( 'fitfloss_blog_posts_excerpt', 'fitfloss_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'fitfloss_blog_posts_info_link', 'fitfloss_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'fitfloss_blog_posts_content', 'fitfloss_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'fitfloss_blog_posts_share', 'fitfloss_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'fitfloss_blog_sidebar', 'fitfloss_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'fitfloss_blog_single_meta', 'fitfloss_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'fitfloss_page_content', 'fitfloss_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'fitfloss_fof', 'fitfloss_fof_cb', 10 );

	

?>