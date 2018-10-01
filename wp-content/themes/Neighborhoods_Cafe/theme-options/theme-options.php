<?php

add_action( 'admin_init', 'theme_options_init' );
add_action('admin_menu', 'NHC_pages');


/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	//HOME OPTIONS
	register_setting( 'NHC_general_options', 'NHC_general_options', 'theme_options_validate' );
	//HOMEPAGE OPTIONS
	register_setting( 'NHC_homepage_options', 'NHC_homepage_options', 'theme_options_validate' );
	//NEIGHBORHOODS MENU OPTIONS
	register_setting( 'NHC_offerings_options', 'NHC_offerings_options', 'theme_options_validate' );
	//HOMEPAGE BOTTOM OPTIONS
	register_setting( 'NHC_bottom_options', 'NHC_bottom_options', 'theme_options_validate' );
	//BLOG OPTIONS
	register_setting( 'NHC_footer_options', 'NHC_footer_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function NHC_pages(){
	//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

    add_menu_page('NHC Options', 'NHC Settings', 'manage_options', 'nhc-menu', 'theme_options_general','dashicons-carrot',30 );    
    add_submenu_page('nhc-menu', 'NHC_general', 'General', 'manage_options', 'nhc-menu' );
    add_submenu_page('nhc-menu', 'NHC_homepage', 'Homepage Top Settings', 'manage_options', 'theme_options_home_page_top', 'theme_options_home_page_top' );
    add_submenu_page('nhc-menu', 'NHC_offerings', 'Offerings Settings', 'manage_options', 'theme_options_offerings', 'theme_options_offerings' );
    add_submenu_page('nhc-menu', 'NHC_bottom', 'Homepage Bottom Settings', 'manage_options', 'theme_options_bottom', 'theme_options_bottom' );
    add_submenu_page('nhc-menu', 'NHC_footer', 'Blog Footer Settings', 'manage_options', 'theme_options_footer_page', 'theme_options_footer_page' );
}

include 'theme_options_general.php';
include 'theme_options_homepage.php';
include 'theme_options_offerings.php';
include 'theme_options_bottom.php';
include 'theme_options_footer.php';

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Say our text option must be safe text with no HTML tags
	// $input['addressheader'] = wp_filter_nohtml_kses( $input['addressheader'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	//$input['addresscontent'] = wp_filter_post_kses( $input['addresscontent'] );

	return $input;
}