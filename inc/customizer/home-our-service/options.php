<?php

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-our-service-enable'] = 1;
$business_craft_customizer_defaults['business-craft-main-title-text'] = __('DESIGN. DEVELOP. DEDICATE','business_craft');

// create panel for singele button
$business_craft_sections['business-craft-our-service-section'] = 
	array(
		'title'   	=>__('Our Service','business_craft'),
		'panel'		=>'business-craft-our-service-panel',
		'priorty'	=>10
	);

// option's cntrol section
$business_craft_settings_controls['business-craft-our-service-enable'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-our-service-enable']
		),
		'control'				=>array(
			'label' 			=>__('Enable Our Service ','business_craft'),
			'section'			=>'business-craft-our-service-section',
			'type'				=>'checkbox',
			'priority'			=>10,
			'active_callback'	=>''	
		)
	);


$business_craft_settings_controls['business-craft-main-title-text'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-main-title-text']
		),
		'control'				=>array(
			'label' 			=>__('Main Title Text Here','business_craft'),
			'section'			=>'business-craft-our-service-section',
			'type'				=>'text',
			'priority'			=>20,
			'active_callback'	=>''	
		)
	);


