<?php

function cw_business_lite_customizer( $wp_customize ) {

	class cw_business_lite_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{
		}
	} 

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_header' , array(
    	'title'       => __( 'Header', 'cw-business-lite' ),
    	'priority'    => 200,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'cw_business_lite_header_logo' , array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_header_logo', array(
		    'label'    => __( 'Logo:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_logo',
		    'priority' => '1',
		) ) );

		/* Header - Title */
		$wp_customize->add_setting( 'cw_business_lite_header_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Contact Us Now: ', 'cw-business-lite')));
		$wp_customize->add_control( 'cw_business_lite_header_title', array(
		    'label'    => __( 'Contact Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_title',
			'priority' => '2',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'cw_business_lite_header_subtitle', array('sanitize_callback' => 'esc_html','default' => __('+0-123-456-789','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_subtitle',
			'priority' => '3',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'cw_business_lite_header_youtube', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'cw_business_lite_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_youtube',
			'priority' => '4',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'cw_business_lite_header_facebook', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'cw_business_lite_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_facebook',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'cw_business_lite_header_googleplus' , array('sanitize_callback' => 'esc_url_raw',"default"=>"#"));
		$wp_customize->add_control( 'cw_business_lite_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'cw_business_lite_header_twitter', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'cw_business_lite_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_twitter',
			'priority' => '6',
		) );

		/* Header - Contact Form 7 - Title */
		$wp_customize->add_setting( 'cw_business_lite_header_contactform7_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_header_contactform7_title', array(
		    'label'    => __( 'Contact Form 7 - Title', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_header',
		    'settings' => 'cw_business_lite_header_contactform7_title',
			'priority' => '7',
		) );

	
	/* Packages */
	
	$wp_customize->add_section( 'cw_business_lite_packages' , array(
		'title'      => __('Packages','cw-business-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'cw-business-lite'),
		'priority'   => 500,
	));
	$wp_customize->add_setting(
        'cw_business_lite_packages',array('sanitize_callback' => 'cw_business_lite_sanitize_notes'));
	
	$wp_customize->add_control( new cw_business_lite_Theme_Support( $wp_customize, 'cw_business_lite_packages',
	    array(
	        'section' => 'cw_business_lite_packages',
	   )
	));
	
	/* custom colors */
	
	$wp_customize->add_section( 'cw_business_lite_custom_colors' , array(
	
		'title'      => __('Custom colors','cw-business-lite'),
		'description' => __( "Change colors for the entire theme. This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'cw-business-lite'),
		'priority'   => 501,
	));
	$wp_customize->add_setting(
        'cw_business_lite_custom_colors',array('sanitize_callback' => 'cw_business_lite_sanitize_notes'));
	
	$wp_customize->add_control( new cw_business_lite_Theme_Support( $wp_customize, 'cw_business_lite_custom_colors',
	    array(
	        'section' => 'cw_business_lite_custom_colors',
	   )
	));
	
	/* Header image */
	
	$wp_customize->add_section( 'cw_business_lite_testimonials' , array(
	
		'title'      => __('Testimonials','cw-business-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'cw-business-lite'),
		'priority'   => 502,
	));
	$wp_customize->add_setting(
        'cw_business_lite_testimonials',array('sanitize_callback' => 'cw_business_lite_sanitize_notes'));
	
	$wp_customize->add_control( new cw_business_lite_Theme_Support( $wp_customize, 'cw_business_lite_testimonials',
	    array(
	        'section' => 'cw_business_lite_testimonials',
	   )
	));

    /********************************/
    /***      Front Page         ****/
    /********************************/
	
	if ( class_exists( 'WP_Customize_Panel' ) ):
	
		$wp_customize->add_panel( 'cw_business_lite_frontpage_panel', array(
			'priority' => 40,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Front Page', 'cw-business-lite' )
		) );
	
		/** Subheader **/
		
		$wp_customize->add_section( 'cw_business_lite_subheader_section' , array(
			'title'       => __( 'Subheader', 'cw-business-lite' ),
			'priority'    => 1,
			'panel' => 'cw_business_lite_frontpage_panel'
		) );

		/* Subheader Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_title', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_subheader_section',
		    'settings' => 'cw_business_lite_frontpage_header_title',
			'priority' => 1,
		) );

		/* SubHeader Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.', 'cw-business-lite')));
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_subheader_section',
		            'settings' 	=> 'cw_business_lite_frontpage_header_content',
		            'priority' 	=> 2
		        )
		    )
		);

		/** Features **/
		
		$wp_customize->add_section( 'cw_business_lite_features_section' , array(
			'title'       => __( 'Features', 'cw-business-lite' ),
			'priority'    => 2,
			'panel' => 'cw_business_lite_frontpage_panel'
		) );
		
		/* Features title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_subheader_title', array('sanitize_callback' => 'esc_html','default' => __( 'Why Choose Us?', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
		    'settings' => 'cw_business_lite_frontpage_subheader_title',
				'priority' => 1,
		) );

		/* Features - Firstly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_title', array('sanitize_callback' => 'esc_html','default' => __( 'Fast &amp; Safe', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
		    'settings' => 'cw_business_lite_frontpage_firstlybox_title',
				'priority' => 2,
		) );

		/* Features - Firstly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_features_section',
		            'settings' 	=> 'cw_business_lite_frontpage_firstlybox_image',
		            'priority' 	=> 3
		        )
		    )
		);
		
		/* Features - Firstly Box - Link */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_firstlybox_link', array(
		    'label'    => __( 'Features Box (first) - Link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
			'priority' => 4,
		) );

		/* Features - Secondly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_title', array('sanitize_callback' => 'esc_html', 'default' => __( '24/ 7 Support', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
		    'settings' => 'cw_business_lite_frontpage_secondlybox_title',
			'priority' => 5,
		) );

		/* Features - Secondly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_features_section',
		            'settings' 	=> 'cw_business_lite_frontpage_secondlybox_image',
		            'priority' 	=> 6
		        )
		    )
		);
		
		/* Features - Secondly Box - Link */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_secondlybox_link', array(
		    'label'    => __( 'Features Box (two) - Link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
			'priority' => 7,
		) );

		/* Features - Thirdly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_title', array('sanitize_callback' => 'esc_html','default' => __( '100% Satisfaction', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
		    'settings' => 'cw_business_lite_frontpage_thirdlybox_title',
			'priority' => 8,
		) );

		/* Features - Thirdly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_features_section',
		            'settings' 	=> 'cw_business_lite_frontpage_thirdlybox_image',
		            'priority' 	=> 9
		        )
		    )
		);
		
		/* Features - Thirdly Box - Link */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thirdlybox_link', array(
		    'label'    => __( 'Features Box (three) - Link:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_features_section',
			'priority' => 10,
		) );
		
		/** Main content **/
		
		$wp_customize->add_section( 'cw_business_lite_main_content_section' , array(
			'title'       => __( 'Main content', 'cw-business-lite' ),
			'priority'    => 3,
			'panel' => 'cw_business_lite_frontpage_panel'
		) );
		
		/* Main Content - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_image', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/index-article-image.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_thecontent_image', array(
		            'label' 	=> __( 'Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_main_content_section',
		            'settings' 	=> 'cw_business_lite_frontpage_thecontent_image',
		            'priority' 	=> 1
		        )
		    )
		);

		/* Main Content - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_title', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet et consectetuer adipiscing','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thecontent_title', array(
		    'label'    => __( 'Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_main_content_section',
		    'settings' => 'cw_business_lite_frontpage_thecontent_title',
			'priority' => 2,
		) );

		/* Main Content - Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_content', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite')) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_main_content_section',
		            'settings' 	=> 'cw_business_lite_frontpage_thecontent_content',
		            'priority' 	=> 3
		        )
		    )
		);
		
		/** Clients **/
		
		$wp_customize->add_section( 'cw_business_lite_clients_section' , array(
			'title'       => __( 'Clients area', 'cw-business-lite' ),
			'priority'    => 4,
			'panel' => 'cw_business_lite_frontpage_panel'
		) );


		/* Our Clients - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Our Clients', 'cw-business-lite' )));
		$wp_customize->add_control( 'cw_business_lite_frontpage_ourclients_title', array(
		    'label'    => __( 'Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_title',
				'priority' => 1,
		) );

		/* Our Clients - Logo 1 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo1', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Logo 1:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo1',
		    'priority' => 2,
		) ) );
		/* Our Clients - Quote 1 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_quote1', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control ( $wp_customize, 'cw_business_lite_frontpage_ourclients_quote1', array(
		    'label'    => __( 'Quote 1:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_quote1',
				'priority' => 3,
		) ) );

		/* Our Clients - Logo 2 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo2', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Logo 2:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo2',
		    'priority' => 4,
		) ) );
		/* Our Clients - Quote 2 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_quote2', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control ( $wp_customize, 'cw_business_lite_frontpage_ourclients_quote2', array(
		    'label'    => __( 'Quote 2:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_quote2',
				'priority' => 5,
		) ) );

		/* Our Clients - Logo 3 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo3' , array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Logo 3:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo3',
		    'priority' => 6,
		) ) );
		/* Our Clients - Quote 3 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_quote3', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control ( $wp_customize, 'cw_business_lite_frontpage_ourclients_quote3', array(
		    'label'    => __( 'Quote 3:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_quote3',
				'priority' => 7,
		) ) );
		/* Our Clients - Logo 4 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo4', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Logo 4:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo4',
		    'priority' => 8,
		) ) );
		/* Our Clients - Quote 4 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_quote4', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control ( $wp_customize, 'cw_business_lite_frontpage_ourclients_quote4', array(
		    'label'    => __( 'Quote 4:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_quote4',
				'priority' => 9,
		) ) );		

		/* Our Clients - Logo 5 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo5', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Logo 5:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo5',
		    'priority' => 10,
		) ) );
		/* Our Clients - Quote 5 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_quote5', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control ( $wp_customize, 'cw_business_lite_frontpage_ourclients_quote5', array(
		    'label'    => __( 'Quote 5:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_clients_section',
		    'settings' => 'cw_business_lite_frontpage_ourclients_quote5',
				'priority' => 11,
		) ) );
		// /* Our Clients - Logo 6 */
		// $wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo6', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo6', array(
		//     'label'    => __( 'Logo 6:', 'cw-business-lite' ),
		//     'section'  => 'cw_business_lite_clients_section',
		//     'settings' => 'cw_business_lite_frontpage_ourclients_logo6',
		//     'priority' => 7,
		// ) ) );
	
	else:
		
		$wp_customize->add_section( 'cw_business_lite_frontpage' , array(
			'title'       => __( 'Front Page', 'cw-business-lite' ),
			'priority'    => 40,
		) );

		/* Front Page - Header Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_title', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_header_title',
			'priority' => '1',
		) );

		/* Front Page - Header Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_header_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.', 'cw-business-lite')));
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_header_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_subheader_title', array('sanitize_callback' => 'esc_html','default' => __( 'Why Choose Us?', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_subheader_title',
			'priority' => '3',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_title', array('sanitize_callback' => 'esc_html','default' => __( 'Fast &amp; Safe', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_firstlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Firstly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_firstlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_firstlybox_image',
		            'priority' 	=> '5'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_title', array('sanitize_callback' => 'esc_html', 'default' => __( '24/ 7 Support', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_secondlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Secondly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_secondlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_secondlybox_image',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_title', array('sanitize_callback' => 'esc_html','default' => __( '100% Satisfaction', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_thirdlybox_title',
			'priority' => '8',
		) );

		/* Front Page - Thirdly Box - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thirdlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_thirdlybox_image',
		            'priority' 	=> '9'
		        )
		    )
		);
		
		/* Front Page - The Content - Image */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_image', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/index-article-image.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_thecontent_image', array(
		            'label' 	=> __( 'The Content - Image:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_thecontent_image',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Front Page - The Content - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_title', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet et consectetuer adipiscing','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_frontpage_thecontent_title', array(
		    'label'    => __( 'The Content - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_thecontent_title',
			'priority' => '11',
		) );

		/* Front Page - The Content - Content */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_thecontent_content', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite')) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_frontpage',
		            'settings' 	=> 'cw_business_lite_frontpage_thecontent_content',
		            'priority' 	=> '12'
		        )
		    )
		);


		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Our Clients', 'cw-business-lite' )));
		$wp_customize->add_control( 'cw_business_lite_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_title',
			'priority' => '14',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo1', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo1',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo2', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo2',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo3' , array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo3',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo4', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo4',
		    'priority' => '17',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo5', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo5',
		    'priority' => '18',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'cw_business_lite_frontpage_ourclients_logo6', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cw_business_lite_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_frontpage',
		    'settings' => 'cw_business_lite_frontpage_ourclients_logo6',
		    'priority' => '19',
		) ) );
		
	endif;	

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_contact' , array(
    	'title'       => __( 'Contact', 'cw-business-lite' ),
    	'priority'    => 350,
	) );

		/* Contact - Sidebar - Map Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_map_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_map_title', array(
		    'label'    => __( 'Sidebar - Map Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_map_title',
			'priority' => '1'
		) );

		/* Contact - Sidebar - Map */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_map', array('sanitize_callback' => 'esc_html','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24213.52815864553!2d-73.94996325246885!3d40.658740929386724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1402317770383" height="450" frameborder="0" style="border:0"></iframe>') );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_contact_sidebar_map', array(
		            'label' 	=> __( 'Sidebar - Map (iframe):', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_contact',
		            'settings' 	=> 'cw_business_lite_contact_sidebar_map',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Sidebar - Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_title', array('sanitize_callback' => 'esc_html','default' => __( 'More about us', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_title', array(
		    'label'    => __( 'Sidebar - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_title',
			'priority' => '3'
		) );

		/* Contact - Sidebar - Address 1 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address1', array('sanitize_callback' => 'esc_html','default' => __( 'United States', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address1', array(
		    'label'    => __( 'Sidebar - Country Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address1',
			'priority' => '4'
		) );

		/* Contact - Sidebar - Address 2 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address2', array('sanitize_callback' => 'esc_html','default' => __( 'New York', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address2', array(
		    'label'    => __( 'Sidebar - City Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address2',
			'priority' => '5'
		) );

		/* Contact - Sidebar - Address 3 */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_address3', array('sanitize_callback' => 'esc_html','default' => __( '412 Broadway #2, New York, NY 10013', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_address3', array(
		    'label'    => __( 'Sidebar - Street Address:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_address3',
			'priority' => '6'
		) );

		/* Contact - Sidebar - Content */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo consequat.', 'cw-business-lite' )));
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_contact_sidebar_content', array(
		            'label' 	=> __( 'Sidebar - Content:', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_contact',
		            'settings' 	=> 'cw_business_lite_contact_sidebar_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Contact - Sidebar - Phone */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_phone', array('sanitize_callback' => 'esc_html','default' => __('+1-888-587-8421','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_phone', array(
		    'label'    => __( 'Sidebar - Phone:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_phone',
			'priority' => '9'
		) );

		/* Contact - Sidebar - Website */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_website', array('sanitize_callback' => 'esc_html','default' => __('<a href="https://themeisle.com/themes/cw-business-lite/" title="Movatique">Movatique</a>','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_website', array(
		    'label'    => __( 'Sidebar - Website:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_website',
			'priority' => '11'
		) );

		/* Contact - Sidebar - Email */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_email', array('sanitize_callback' => 'esc_html','default' => __('info@movatique','cw-business-lite')) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_email', array(
		    'label'    => __( 'Sidebar - Email:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_email',
			'priority' => '13'
		) );

		/* Contact - Sidebar - Socials Title */
		$wp_customize->add_setting( 'cw_business_lite_contact_sidebar_socials_title', array('sanitize_callback' => 'esc_html','default' => __( 'Our social network', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_contact_sidebar_socials_title', array(
		    'label'    => __( 'Sidebar - Socials Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_contact',
		    'settings' => 'cw_business_lite_contact_sidebar_socials_title',
			'priority' => '14'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'cw_business_lite_404' , array(
    	'title'       => __( '404 Page', 'cw-business-lite' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'cw_business_lite_404_title', array('sanitize_callback' => 'esc_html','default' => __( '404 Error', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_404_title', array(
		    'label'    => __( '404 - Title:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_404',
		    'settings' => 'cw_business_lite_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'cw_business_lite_404_subtitle', array('sanitize_callback' => 'esc_html','default' => __( 'The page does not exist', 'cw-business-lite' )) );
		$wp_customize->add_control( 'cw_business_lite_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'cw-business-lite' ),
		    'section'  => 'cw_business_lite_404',
		    'settings' => 'cw_business_lite_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'cw_business_lite_404_content', array('sanitize_callback' => 'esc_html','default' => __( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try.  Can you try this again or maybe visit our <a title="themeIsle" href="'. home_url() .'">Home Page</a> to start fresh.  We\'ll do better next time.', 'cw-business-lite' )) );
		$wp_customize->add_control( new cw_business_lite_Textarea_Control( $wp_customize, 'cw_business_lite_404_content', array(
		            'label' 	=> __( '404 - Content', 'cw-business-lite' ),
		            'section' 	=> 'cw_business_lite_404',
		            'settings' 	=> 'cw_business_lite_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

}
add_action( 'customize_register', 'cw_business_lite_customizer' );


/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 */

function cw_business_lite_customize_preview_js() {

	wp_enqueue_script( 'cw_business_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}

add_action( 'customize_preview_init', 'cw_business_lite_customize_preview_js' );

function cw_business_lite_registers() {

	wp_register_script( 'cw_business_lite_customizer_script', get_template_directory_uri() . '/js/cw_business_lite_customizer.js', array("jquery"), '20120206', true  );

	wp_enqueue_script( 'cw_business_lite_customizer_script' );

}

add_action( 'customize_controls_enqueue_scripts', 'cw_business_lite_registers' );

if( class_exists( 'WP_Customize_Control' ) ):
	class cw_business_lite_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>