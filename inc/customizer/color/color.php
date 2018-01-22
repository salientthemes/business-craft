<?php

global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;


$business_craft_customizer_defaults['business-craft-primary-color'] = '#37ce9c';
$business_craft_customizer_defaults['business-craft-section-header-color'] = '#000';


// create a section for color option
$business_craft_sections['business_crfat_color_section'] 	=
	array(
		'title'			=>esc_html__('Colors','business-craft'),
		'priority'		=> 40
	);


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

