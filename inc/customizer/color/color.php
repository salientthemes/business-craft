<?php


global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;


$business_craft_customizer_defaults['business-craft-primary-color'] = '#37ce9c';
$business_craft_customizer_defaults['business-craft-section-header-color'] = '#000';
$business_craft_customizer_defaults['business-craft-color-reset'] = '';

// create a section for color option
$business_craft_sections['business_crfat_color_section'] 	=
	array(
		'title'			=>esc_html__('Colors','business-craft'),
		'priority'		=> 40
	);


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since business-craft- 1.0
 */
if ( ! function_exists( 'business_craft_color_reset' ) ) :
    function business_craft_color_reset( ) {
        
            global $business_craft_customizer_saved_values;
           $business_craft_customizer_saved_values = business_craft_get_all_options();
        if ( $business_craft_customizer_saved_values['business-craft-color-reset'] == 1 ) {
            global $business_craft_customizer_defaults;
            global $business_craft_customizer_saved_values;

            /*setting fields */
            $business_craft_customizer_saved_values['business-craft-primary-color'] = $business_craft_customizer_defaults['business-craft-primary-color'];
            $business_craft_customizer_saved_values['business-craft-section-header-color'] = $business_craft_customizer_defaults['business-craft-section-header-color'];
            



            remove_theme_mod( 'background_color' );
            $business_craft_customizer_saved_values['business-craft-color-reset'] = '';
            /*resetting fields*/
            business_craft_reset_options( $business_craft_customizer_saved_values );

        }
        else 
        {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','business_craft_color_reset' );

// control section for primary color
$business_craft_settings_controls['business-craft-primary-color']  =  
	array(
		'setting'			=>array(
			'default'		=> $business_craft_customizer_defaults['business-craft-primary-color']
		),
		'control'				=>array(
			'label'				=>esc_html__('Primary','business-craft'),
			'description'		=>esc_html__('will change the primary color default is #37ce9c','business-craft'),
			'section'			=>'business_crfat_color_section',
			'type'				=>'color',
			'priority'			=>10,
			'active_callback'	=>'',
		)
	);

// control section for primary color
$business_craft_settings_controls['business-craft-section-header-color']  =  
	array(
		'setting'			=>array(
			'default'		=> $business_craft_customizer_defaults['business-craft-section-header-color']
		),
		'control'				=>array(
			'label'				=>esc_html__('Header Section Color','business-craft'),
			'description'		=>esc_html__('will change the header section color default is #000','business-craft'),
			'section'			=>'business_crfat_color_section',
			'type'				=>'color',
			'priority'			=>20,
			'active_callback'	=>'',
		)
	);

// control section for reset color
$business_craft_settings_controls['business-craft-color-reset']  =  
	array(
		'setting'			=>array(
			'default'		=> $business_craft_customizer_defaults['business-craft-color-reset']
		),
		'control'				=>array(
			'label'				=>esc_html__('Rest','business-craft'),
			'description'		=>esc_html__('Caution: Reset all above color settings to default. Refresh the page after save to view the effects.','business-craft'),
			'section'			=>'business_crfat_color_section',
			'type'				=>'checkbox',
			'priority'			=>30,
			'active_callback'	=>'',
		)
	);