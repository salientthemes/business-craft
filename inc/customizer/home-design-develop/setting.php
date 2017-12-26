<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-number-of-word'] = 30;
$business_craft_customizer_defaults['business-craft-select-number-page'] = 3;

// create panel for singele button
$business_craft_sections['business-craft-design-develop-section'] = 
	array(
		'title'   	=>__('Design Develop Setting','business_craft'),
		'panel'		=>'business-craft-design-develop-panel',
		'priorty'	=>10
	);

// option's cntrol section
$business_craft_settings_controls['business-craft-number-of-word'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-number-of-word']
		),
		'control'				=>array(
			'label' 			=>__('Number of word','business_craft'),
			'section'			=>'business-craft-design-develop-section',
			'type'				=>'number',
			'input_attrs' => array( 'min' => 1, 'max' => 200),
			'priority'			=>10,
			'active_callback'	=>''	
		)
	);



