<?php 
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

// $business_craft_customizer_defaults['business-craft-enable-breadcrumb'] = 1;
$business_craft_customizer_defaults['business-craft-select-number-footer'] = 3;
$business_craft_customizer_defaults['business-craft-copy-right-text'] = esc_html__('Copyright © All right reserved','business-craft');


// created theme layout footer section
$business_craft_sections['business-craft-footer-section'] = 
	array(
		'title'				=>  esc_html__('Footer Section','business-craft'),
		'panel'				=>  'business-craft-theme-panel',
		'priority'			=>  10
	);

// create footer section control
$business_craft_settings_controls['business-craft-select-number-footer'] = 
	array(
		'setting'						=>  array(
			'default'					=>  $business_craft_customizer_defaults['business-craft-select-number-footer']
		),
		'control'						=>  array(
			'label'						=>  esc_html__('Select Number Of Siderbar In Footer','business-craft'),
			'section'					=>  'business-craft-footer-section',
			'type'						=>  'select',
			'choices'					=>  array(
				0						=>  esc_html__('Disable sidebar footer area','business-craft'),
				1						=>  esc_html__('1','business-craft'),
				2 						=>  esc_html__('2','business-craft'),
				3						=>  esc_html__('3','business-craft')

			),
			'priority'					=>  10,
			'active_callback'			=>  ''
		)
	);


//for text section
$business_craft_settings_controls['business-craft-copy-right-text'] = 
	array(
		'setting'						=>  array(
			'default'					=>  $business_craft_customizer_defaults['business-craft-copy-right-text']
		),
		'control'						=>  array(
			'label'						=>  esc_html__('Copy Right Footer Text','business-craft'),
			'section'					=>  'business-craft-footer-section',
			'type'						=>  'text',
			'priority'					=>  30,
			'active_callback'			=>  ''
		)
	);
