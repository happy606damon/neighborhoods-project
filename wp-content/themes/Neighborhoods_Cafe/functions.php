<?php $rootFolder = get_bloginfo('template_directory');?>
<?php
//ADD CUSTOM CSS FOR OPTIONS ADMIN PAGE
	function load_custom_wp_admin_style($hook) {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/nhc-admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );		}

	add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
	add_action( 'login_enqueue_scripts', 'load_custom_wp_admin_style' );

// REPLACE "HOWDY" TEXT WITH "WELCOME"
	function replace_howdy( $text ) {
	    $newtext = 'Welcome';
	    if ( is_user_logged_in() ) {
	        $text = str_replace( 'Howdy', $newtext, $text );
	    }
	    return $text;
	}
	add_filter( 'gettext', 'replace_howdy' );

//Register Thumbnails
add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'normal', 600, 9900 ); //600 pixels wide (and no height constraint)
	add_image_size( 'small', 200, 200, true ); //(cropped)
	add_image_size( 'tiny', 100, 100, true ); //(cropped)
}

//MEDIA UPLOADER
	function enqueue_media_uploader()
	{
	    wp_enqueue_media();
	}

	add_action("admin_enqueue_scripts", "enqueue_media_uploader");

//DASHBOARD TAB
	add_action('wp_dashboard_setup', 'sl_remove_dashboard_widgets' );

	function sl_remove_dashboard_widgets() {
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal');
		remove_meta_box ('dashboard_right_now', 'dashboard', 'normal');
		remove_meta_box ('dashboard_recent_comments', 'dashboard', 'normal');
		remove_meta_box ('dashboard_plugins', 'dashboard', 'normal');

		wp_add_dashboard_widget('sl_dashboard_widget', 'Neighborhoods Cafe Dashboard', 'sl_dashboard_widget_function');
	}

	function sl_dashboard_widget_function() {
		?>
				<img id="dashTabLogo" src="http://localhost:8888/neighborhoods/wp-content/uploads/2016/04/neighborhoodslogo.png" />
				<h2>Welcome to the Neighborhoods Cafe dashboard.</h2>
				<p>Access the following features here: </p>
				<ul>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/users.php">Users</a></li>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/admin.php?page=theme_options_offerings">Changing the Offerings</a></li>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/post.php?post=23&action=edit">Adding Images to Slider and Gallery</a></li>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/admin.php?page=theme_options_home_page_top">Editing Homepage Top Settings</a></li>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/admin.php?page=theme_options_bottom">Editing Homepage Bottom Settings</a></li>
					<li><a href="<?php echo $rootFolder ?>/neighborhoods/wp-admin/admin.php?page=theme_options_footer_page">Editing the Blog Footer Settings</a></li>
				</ul>
		<?php
	}

	//REMOVE ITEMS FROM ADMIN MENU
	function my_remove_menu_pages() {
		remove_menu_page('link-manager.php');	
		remove_menu_page('edit-comments.php');	
	}

	add_action( 'admin_menu', 'my_remove_menu_pages' );	

//REGISTER SIDEBAR FOR WIDGETS
	add_action( 'widgets_init', 'my_register_sidebars' );

	function my_register_sidebars() {
	   	register_sidebar(
	      array(
	        'id' => 'header_widget',
	        'name' => 'header widget'
	      )
	    );

		register_sidebar(
			array(
				'id' => 'sidebar_blog',
				'name' => 'Blog sidebar'
			)
		);
	}

// CUSTOM ADMIN LOGIN HEADER LOGO - User sees this when they log into Wordpress
	function my_custom_login_logo()
	{
	    echo '<style  type="text/css"> h1 a {background-image:url(' . get_bloginfo('template_directory') . '/images/neighborhoodslogo.png)  !important; background-size: 100% !important; height: 200px !important; width: 100% !important}</style>';
	}
	add_action('login_head',  'my_custom_login_logo');

//CUSTOM THEME OPTIONS
	require_once ( get_template_directory() . '/theme-options/theme-options.php' );

//HIDING ACF FROM USERS
add_filter('acf/settings/show_admin', '__return_false');	

?>