<?php
/**
 * salient themes Theme Customizer
 *
 * @package salient themes
 * @subpackage business-craft
 * @since business-craft 1.0.0
 */
add_filter('salient_customizer_framework_url', 'business_craft_customizer_framework_url');

if( ! function_exists( 'business_craft_customizer_framework_url' ) ):

    function business_craft_customizer_framework_url(){
        return trailingslashit( get_template_directory_uri() ) . 'inc/frameworks/salient-customizer/';
    }

endif;

add_filter('salient_customizer_framework_path', 'business_craft_customizer_framework_path');

if( ! function_exists( 'business_craft_customizer_framework_path' ) ):
    function business_craft_customizer_framework_path(){
        return trailingslashit( get_template_directory() ) . 'inc/frameworks/salient-customizer/';
    }
endif;

/*define constant for coder-customizer-constant*/
if(!defined('salient_CUSTOMIZER_NAME')){
    define('salient_CUSTOMIZER_NAME','business-craft-options');
}


/**
 * reset options
 * @param  array $reset_options
 * @return void
 *
 * @since business-craft 1.0
 */
if ( ! function_exists( 'business_craft_reset_options' ) ) :
    function business_craft_reset_options( $reset_options ) {
        set_theme_mod( salient_CUSTOMIZER_NAME, $reset_options );
    }
endif;
/**
 * Customizer framework added.
 */
require get_template_directory().'/inc/frameworks/salient-customizer/salient-customizer.php';

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*customizer homepage slider option*/
require get_template_directory().'/inc/customizer/home-slider-panel.php';

/*customizer homepage featured section*/
require get_template_directory().'/inc/customizer/home-feature-panel.php';

/*customizer homepage testimonial section*/
require get_template_directory().'/inc/customizer/home-testimonial-panel.php';

/*customizer homepage blog section*/
require get_template_directory().'/inc/customizer/home-blog-panel.php';

/*customizer about us section*/
require get_template_directory().'/inc/customizer/home-about-us/panel.php';

/*customizer single button section*/
require get_template_directory().'/inc/customizer/home-single-button/panel.php';

/*customizer design develop section*/
require get_template_directory().'/inc/customizer/home-our-service/panel.php';

/*customizer theme option's section*/
require get_template_directory().'/inc/customizer/theme-options/panel.php';

/**
 * business-craft Theme Customizer
 *
 * @package business-craft
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_craft_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'business_craft_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'business_craft_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'business_craft_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function business_craft_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function business_craft_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/******************************************
Removing section setting control
 *******************************************/

$business_craft_customizer_args = array(
    'panels'            => $business_craft_panels, /*always use key panels */
    'sections'          => $business_craft_sections,/*always use key sections*/
    'settings_controls' => $business_craft_settings_controls,/*always use key settings_controls*/
    'repeated_settings_controls' => $business_craft_repeated_settings_controls,/*always use key sections*/
);

/*registering panel section setting and control start*/
function business_craft_add_panels_sections_settings() {
    global $business_craft_customizer_args;
    return $business_craft_customizer_args;
}
add_filter( 'salient_customizer_panels_sections_settings', 'business_craft_add_panels_sections_settings' );
/*registering panel section setting and control end*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function business_craft_customize_preview_js() {
	wp_enqueue_script( 'business-craft-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'business_craft_customize_preview_js' );


/**
 * get all saved options
 * @param  null
 * @return array saved options
 *
 * @since business-craft 1.0
 */
if ( ! function_exists( 'business_craft_get_all_options' ) ) :
    function business_craft_get_all_options( $merge_default = 0 ) {
        $business_craft_customizer_saved_values = salient_customizer_get_all_values( );
        if( 1 == $merge_default ){
            global $business_craft_customizer_defaults;
            if(is_array( $business_craft_customizer_saved_values )){
                $business_craft_customizer_saved_values = array_merge($business_craft_customizer_defaults, $business_craft_customizer_saved_values );
            }
            else{
                $business_craft_customizer_saved_values = $business_craft_customizer_defaults;
            }
        }
        return $business_craft_customizer_saved_values;
    }
endif;