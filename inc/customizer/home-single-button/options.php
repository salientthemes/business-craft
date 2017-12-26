<?php

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-single-button-enable'] = 1;
$business_craft_customizer_defaults['business-craft-single-button-text'] = __('I AM GOING BY THIS PRODUCT','business_craft');
$business_craft_customizer_defaults['business-craft-single-button-link'] = "#";


// create panel for singele button
$business_craft_sections['business-craft-single-button-section'] = 
	array(
		'title'   	=>__('Single Butoon Option','business_craft'),
		'panel'		=>'business-craft-single-button-panel',
		'priorty'	=>10
	);

// option's cntrol section
$business_craft_settings_controls['business-craft-single-button-enable'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-single-button-enable']
		),
		'control'				=>array(
			'label' 			=>__('Enable Single Button','business_craft'),
			'section'			=>'business-craft-single-button-section',
			'type'				=>'checkbox',
			'priority'			=>10,
			'active_callback'	=>''	
		)
	);


$business_craft_settings_controls['business-craft-single-button-text'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-single-button-text']
		),
		'control'				=>array(
			'label' 			=>__('Button Text Here','business_craft'),
			'section'			=>'business-craft-single-button-section',
			'type'				=>'text',
			'priority'			=>20,
			'active_callback'	=>''	
		)
	);

$business_craft_settings_controls['business-craft-single-button-link'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-single-button-link']
		),
		'control'				=>array(
			'label' 			=>__('Button Link Here','business_craft'),
			'section'			=>'business-craft-single-button-section',
			'type'				=>'text',
			'priority'			=>30,
			'active_callback'	=>''	
		)
	);


