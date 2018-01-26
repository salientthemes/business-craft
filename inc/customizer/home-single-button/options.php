<?php

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-single-button-enable'] = 0;
$business_craft_customizer_defaults['business-craft-single-button-text'] = esc_html__('I AM GOING BY THIS PRODUCT','business-craft');
$business_craft_customizer_defaults['business-craft-single-button-link'] = "#";


// create panel for singele button
$business_craft_sections['business-craft-single-button-section'] = 
	array(
		'title'   	=>  esc_html__('Call To Action','business-craft'),
		'panel'		=>  'business_craft_home_panel',
		'priority'	=>  25
	);

// option's cntrol section
$business_craft_settings_controls['business-craft-single-button-enable'] = 
	array(
		'setting' 				=>   array(
			'default'			=>  $business_craft_customizer_defaults['business-craft-single-button-enable']
		),
		'control'				=>  array(
			'label' 			=>  esc_html__('Enable Single Button','business-craft'),
			'section'			=>  'business-craft-single-button-section',
			'type'				=>  'checkbox',
			'priority'			=>  10,
			'active_callback'	=>  ''	
		)
	);


$business_craft_settings_controls['business-craft-single-button-text'] = 
	array(
		'setting' 				=>   array(
			'default'			=>  $business_craft_customizer_defaults['business-craft-single-button-text']
		),
		'control'				=>  array(
			'label' 			=>  esc_html__('Button Text Here','business-craft'),
			'section'			=>  'business-craft-single-button-section',
			'type'				=>  'text',
			'priority'			=>  20,
			'active_callback'	=>  ''	
		)
	);

$business_craft_settings_controls['business-craft-single-button-link'] = 
	array(
		'setting' 				=>   array(
			'default'			=>  $business_craft_customizer_defaults['business-craft-single-button-link']
		),
		'control'				=>  array(
			'label' 			=>  esc_html__('Button Link Here','business-craft'),
			'section'			=>  'business-craft-single-button-section',
			'type'				=>  'text',
			'priority'			=>  30,
			'active_callback'	=>  ''	
		)
	);


