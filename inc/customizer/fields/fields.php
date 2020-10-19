<?php 
/**
 * @Packge     : Fitfloss
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'fitfloss_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'fitfloss' ),
        'description' => esc_html__( 'Select the theme color.', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_general_section',
        'default'     => '#ff0000',
    )
);

// Header book button label
Epsilon_Customizer::add_field(
    'fitfloss_header_phone_number',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Phone Number', 'fitfloss' ),
        'section'     => 'fitfloss_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+440 1234 654 953', 'fitfloss' ),
    )
);

// Header call button bg color
Epsilon_Customizer::add_field(
    'fitfloss_book_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Bg Color', 'fitfloss' ),
        'description' => esc_html__( 'Select the color.', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#ff0000',
    )
);

// Header call button hover bg color
Epsilon_Customizer::add_field(
    'fitfloss_book_btn_hvr_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Call Button Hover Bg Color', 'fitfloss' ),
        'description' => esc_html__( 'Select the color.', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#222222',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'fitfloss' ),
        'section'     => 'fitfloss_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'fitfloss_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'fitfloss' ),
        'description' => esc_html__( 'Select the header background color.', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#ff0000',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'fitfloss_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'fitfloss_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#ff0000',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'fitfloss_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#000000',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'fitfloss_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_header_section',
        'default'     => '#ff0000',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'fitfloss_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'fitfloss' ),
        'description' => esc_html__( 'Set post excerpt length.', 'fitfloss' ),
        'section'     => 'fitfloss_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'fitfloss_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'fitfloss' ),
        'section'     => 'fitfloss_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'fitfloss_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'fitfloss' ),
        'section'     => 'fitfloss_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'fitfloss_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'fitfloss' ),
        'section'     => 'fitfloss_blog_section',
        'default'     => true
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'fitfloss_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'fitfloss' ),
        'section'           => 'fitfloss_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'fitfloss_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'fitfloss' ),
        'section'           => 'fitfloss_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'fitfloss_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'fitfloss_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'fitfloss_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'fitfloss' ),
        'section'     => 'fitfloss_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'fitfloss' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'fitfloss' ),
        'section'     => 'fitfloss_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'fitfloss_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'fitfloss' ),
        'section'     => 'fitfloss_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'fitfloss' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'fitfloss_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'fitfloss' ),
        'section'     => 'fitfloss_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);


// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'fitfloss_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profiles Profile Show/Hide', 'fitfloss' ),
        'section'     => 'fitfloss_social_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'fitfloss_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'fitfloss_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'fitfloss' ),
        'button_label' => esc_html__( 'Add new social link', 'fitfloss' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'fitfloss' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'fitfloss' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'fitfloss' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Dribbble', 'fitfloss' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-dribbble',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'fitfloss' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'fitfloss' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'fitfloss' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_footer_section',
        'default'     => '#ff0000',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'fitfloss_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'fitfloss' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitfloss_footer_section',
        'default'     => '#ffffff',
    )
);

