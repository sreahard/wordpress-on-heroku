<?php

function cw_business_lite_setup() {
    global $content_width;
    require_once ( 'includes/custom-functions.php' );
    require_once ( 'includes/customizer.php' );

    if ( ! isset( $content_width ) ) $content_width = 634;

	load_theme_textdomain( 'cw-business-lite', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' ); /* Post Thumbnails */

    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'cw_business_lite_setup' );


/**
 *  WP Enqueue Style
 */
function cw_business_lite_wp_enqueue_style() {
    wp_enqueue_style( 'cw_business_lite_style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'cw_business_lite_scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery','jquery-masonry','carouFredSel' ), '1.0', true );
    wp_enqueue_script( 'Roboto-font', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100italic,100', '6.2.1', true );
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}

add_action( 'wp_enqueue_scripts', 'cw_business_lite_wp_enqueue_style' );

function cw_business_lite_navigation_menu() {

	$locations = array(
		'top-menu' => __( 'This menu will appear in header.', 'cw-business-lite' ),
	);
	register_nav_menus( $locations );

}

add_action( 'init', 'cw_business_lite_navigation_menu' );

function cw_business_lite_sidebar() {

	$args = array(
		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'cw-business-lite' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'cw-business-lite' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

    $args = array(
        'id'            => 'footer_sidebar',
        'name'          => __( 'Footer Sidebar', 'cw-business-lite' ),
        'description'   => __( 'This sidebar will appear in footer.', 'cw-business-lite' ),
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="footer-one-widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}

add_action( 'widgets_init', 'cw_business_lite_sidebar' );

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'cw_business_lite_required_plugins' );

function cw_business_lite_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'WP Product Review',
            'slug'      => 'wp-product-review',
            'required'  => false,
        ),
    

    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => 'cw-business-lite',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => '',                          // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', 'cw-business-lite' ),
            'menu_title'                                => __( 'Install Plugins', 'cw-business-lite' ),
            'installing'                                => __( 'Installing Plugin: %s', 'cw-business-lite' ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', 'cw-business-lite' ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'cw-business-lite' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'cw-business-lite' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'cw-business-lite' ),
            'return'                                    => __( 'Return to Required Plugins Installer', 'cw-business-lite' ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', 'cw-business-lite' ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', 'cw-business-lite' ), // %1$s = dashboard link
            'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}

 
function cw_business_lite_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'cw-business-lite' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'cw_business_lite_wp_title', 10, 2 ); 

function cw_business_lite_add_editor_styles() {
    add_editor_style( '/css/custom-editor-style.css' );
}
add_action( 'init', 'cw_business_lite_add_editor_styles' );