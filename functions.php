<?php
/**
 * business-craft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-craft
 */

if ( ! function_exists( 'business_craft_setup' ) ) :
	require get_template_directory() . '/inc/init.php';
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_craft_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business-craft, use a find and replace
		 * to change 'business-craft' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business-craft', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'business-craft' ),
			'menu-2' => esc_html__( 'social', 'business-craft' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'business_craft_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			// 'height'      => 250,
			// 'width'       => 250,
			// 'flex-width'  => true,
			'flex-height' => true,
		) );

		
	}
endif;
add_action( 'after_setup_theme', 'business_craft_setup' );

/*breadcrum function*/

if ( ! function_exists( 'business_craft_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function business_craft_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;



add_action( 'tgmpa_register', 'business_craft_recommended_plugins' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_craft_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'business_craft_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_craft_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function business_craft_scripts() {
	wp_enqueue_style( 'business-craft-style', get_stylesheet_uri() );
	wp_enqueue_style( 'business-craft-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900');
	//css
	wp_enqueue_script( 'jquery-modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '2.8.3', true );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css');/*bootstrap css*/
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/bootstrap/slick.css');/*slick css*/
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css');/*font-awesome css*/
	wp_enqueue_style( 'lato-font', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css');/*font-awesome css*/
    /* js file */

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.js');
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/bootstrap/slick.js');
	/* custom js */
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js');

	wp_enqueue_script( 'business-craft-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// Enqueue  inline
	wp_add_inline_style( 'business-craft-style', business_craft_inline_style() );

	wp_enqueue_script( 'business-craft-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'business_craft_scripts' );



/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/*update to pro link*/
require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/business-craft/class-customize.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
*Inline style to use color options
**/
if( ! function_exists( 'business_craft_inline_style' ) ) :

    /**
     * style to use color options
     *
     * @since  business-craft 1.0.1
     */
    function business_craft_inline_style()
    {
      
        global $business_craft_customizer_all_values;
        global $business_craft_google_fonts;
        $business_craft_background_color = get_background_color();
        $business_craft_primary_color_option = $business_craft_customizer_all_values['business-craft-primary-color'];
        $business_craft_section_header_color_option = $business_craft_customizer_all_values['business-craft-section-header-color'];
        $business_craft_icon_color = $business_craft_customizer_all_values['business-craft-icon-color'];
        ?>
        <style type="text/css">
        /*=====COLOR OPTION=====*/

        /*Color*/
        /*----------------------------------*/
        <?php 
        /*Primary*/
        if( !empty($business_craft_primary_color_option) )
        { ?>
	        button, 
	        input[type="button"], 
	        input[type="reset"], 
	        input[type="submit"],
	        a.border-btn,
	        a.call-to-action-btn:hover,
	        a.call-to-action-btn:focus, 
	        a.call-to-action-btn:active,
	        h2.widget-title:before, 
	        h1.entry-title:before,
	        div#gotop i,
	        #breadcrumb,
	        a.call-to-action-btn,
	        .slick-prev:hover:before, 
	        .slick-next:hover:before,
	        .slick-dots li,
	        body .team-section a
	        {
	        	background-color: <?php echo esc_attr( $business_craft_primary_color_option ) ;?>!important;;
	        }

		    .banner-content-wrapper h1 span,
		    .blog-content a:hover,
			.blog-content a:active,
			.blog-content a:focus,
			.feature-items.clearfix:hover h4,
			.feature-items.clearfix:hover h4 a,
			.meet-us-text.texts:hover h4 a,
			.widget ul li a:hover, 
			.widget ul li a:focus, 
			.widget ul li a:active,
			.meet-us-content h4 a
	        {
	        	color: <?php echo esc_attr( $business_craft_primary_color_option ) ;?>!important;;
	        }

	        header#masthead,
	        a.border-btn,
	        .sec-title h2:after,
	        .main-navigation ul ul,
	        div#gotop i,
	        .social-widget.salient-social-section.social-icon-only.top-tooltip
	        {
	        	border-color: <?php echo esc_attr( $business_craft_primary_color_option ) ;?>!important;;
	        }
	    <?php }

       
       
	        if( !empty($business_craft_section_header_color_option) )
	        {
	        ?>
	            .sec-title h2
	            {
	                color: <?php echo esc_attr( $business_craft_section_header_color_option );?>;
	            }
	        <?php
	        } ?>
	        

	       
        </style>       
     <?php }
 endif;
