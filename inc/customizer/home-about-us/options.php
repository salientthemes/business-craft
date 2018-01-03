<?php

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-about-us-enable-option'] = 0;
$business_craft_customizer_defaults['business-craft-about-us-main-title-text'] = __('MEET US IN PERSONAL','business-craft');


// create a section for about us
$business_craft_sections['business_craft_about_us_section']  =
	array(
		'title'          	=>__('About Us Option','business-craft'),
		'panel'				=>'business_craft_about_panel',
		'priority'			=>10,
	); 

$business_craft_settings_controls['business-craft-about-us-enable-option'] = 
	array(
		'setting' 				=>array(
			'default'           =>$business_craft_customizer_defults['business-craft-about-us-enable-option']
		),
		'control'				=>array(
			'label'				=>__('Enable About US ','business-craft' ),
			'section'			=>'business_craft_about_us_section',
			'type'				=>'checkbox',
			'priority'			=>10,
			'activity_callback' =>''

		)
	);

$business_craft_settings_controls['business-craft-about-us-main-title-text'] = 
	array(
		'setting' 				=>array(
			'default'           =>$business_craft_customizer_defults['business-craft-about-us-main-title-text']
		),
		'control'				=>array(
			'label'				=>__('Title text ','business-craft' ),
			'section'			=>'business_craft_about_us_section',
			'type'				=>'text',
			'priority'			=>20,
			'activity_callback' =>''

		)
	);