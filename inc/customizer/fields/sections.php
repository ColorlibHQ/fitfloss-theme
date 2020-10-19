<?php 
/**
 * @Packge     : Fitfloss
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'fitfloss_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'fitfloss' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'fitfloss_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'fitfloss_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'fitfloss_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'fitfloss_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'fitfloss_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'fitfloss_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'fitfloss_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'fitfloss_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'fitfloss' ),
            'panel'    => 'fitfloss_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>