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
 

function fitfloss_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'fitfloss' ),
        'id'            => 'fitfloss-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'fitfloss' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-sm-6 col-lg-3"><div id="%1$s" class="single-footer-widget footer_widget widget footer_1 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'fitfloss' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-lg-3 col-sm-6"><div id="%1$s" class="single-footer-widget footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'fitfloss' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-sm-12 col-md-8 col-lg-5"><div id="%1$s" class="single-footer-widget footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );   
    
}
add_action( 'widgets_init', 'fitfloss_widgets_init' );
