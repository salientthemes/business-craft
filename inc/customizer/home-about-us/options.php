<?php

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defults;

$business_craft_customizer_defults['business_craft_about_us_enable_option'] = 0;

// create a section for about us
$business_craft_sections['business_craft_about_us_section']  =
	array(
		'title'          	=>__('About Us Option','business_craft'),
		'panel'				=>'business_craft_about_panel',
		'priority'			=>10,
	); 

$business_craft_settings_controls['business_craft_about_us_enable_option'] = 
	array(
		'setting' 				=>array(
			'default'           =>$business_craft_customizer_defults['business_craft_about_us_enable_option']
		),
		'control'				=>array(
			'label'				=>__('Enable About US ','business_craft' ),
			'section'			=>'business_craft_about_us_section',
			'type'				=>'checkbox',
			'priority'			=>10,
			'activity_callback' =>''

		)
	);