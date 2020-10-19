<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'FITFLOSS_DIR_URI' ) ) {
	define( 'FITFLOSS_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'FITFLOSS_DIR_ASSETS_URI' ) ) {
	define( 'FITFLOSS_DIR_ASSETS_URI', FITFLOSS_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'FITFLOSS_DIR_CSS_URI' ) ) {
	define( 'FITFLOSS_DIR_CSS_URI', FITFLOSS_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'FITFLOSS_DIR_JS_URI' ) ) {
	define( 'FITFLOSS_DIR_JS_URI', FITFLOSS_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'FITFLOSS_DIR_IMGS_URI' ) ) {
	define( 'FITFLOSS_DIR_IMGS_URI', FITFLOSS_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'FITFLOSS_DIR_ICON_IMG_URI' ) ) {
	define( 'FITFLOSS_DIR_ICON_IMG_URI', FITFLOSS_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'FITFLOSS_DIR_PATH' ) ) {
	define( 'FITFLOSS_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'FITFLOSS_DIR_PATH_INC' ) ) {
	define( 'FITFLOSS_DIR_PATH_INC', FITFLOSS_DIR_PATH . 'inc/' );
}

//Fitfloss Libraries Folder Directory
if ( ! defined( 'FITFLOSS_DIR_PATH_LIBS' ) ) {
	define( 'FITFLOSS_DIR_PATH_LIBS', FITFLOSS_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'FITFLOSS_DIR_PATH_CLASSES' ) ) {
	define( 'FITFLOSS_DIR_PATH_CLASSES', FITFLOSS_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'FITFLOSS_DIR_PATH_HOOKS' ) ) {
	define( 'FITFLOSS_DIR_PATH_HOOKS', FITFLOSS_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function fitfloss_admin_script(){
    wp_enqueue_style( 'fitfloss-admin', get_template_directory_uri().'/assets/css/fitfloss-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'fitfloss_admin', get_template_directory_uri().'/assets/js/fitfloss-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'fitfloss_admin_script' );



/**
 * Include File
 *
 */
require_once( FITFLOSS_DIR_PATH_INC . 'fitfloss-breadcrumbs.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'fitfloss-widgets-reg.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'post-like.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'fitfloss-functions.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'fitfloss-commoncss.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'support-functions.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( FITFLOSS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( FITFLOSS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( FITFLOSS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( FITFLOSS_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( FITFLOSS_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Fitfloss object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Fitfloss = new Fitfloss();