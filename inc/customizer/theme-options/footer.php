<?php 
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-select-number-footer'] = 3;
$business_craft_customizer_defaults['business-craft-copy-right-text'] = __('Copyright © All right reserved','business_craft');


// created theme layout footer section
$business_craft_sections['business-craft-footer-section'] = 
	array(
		'title'				=>__('Footer Section','business_craft'),
		'panel'				=>'business-craft-theme-panel',
		'priority'			=>10
	);

// create footer section control
$business_craft_settings_controls['business-craft-select-number-footer'] = 
	array(
		'setting'						=>array(
			'default'					=>$business_craft_customizer_defaults['business-craft-select-number-footer']
		),
		'control'						=>array(
			'label'						=>__('Select Number Of Siderbar In Footer','business_craft'),
			'section'					=>'business-craft-footer-section',
			'type'						=>'select',
			'choices'					=>array(
				0						=>__('Desabal sidebar footer area','business_craft'),
				1						=>__('1','business_craft'),
				2 						=>__('2','business_craft'),
				3						=>__('3','business_craft')

			),
			'priority'					=>10,
			'active_callback'			=>''
		)
	);

//for text section
$business_craft_settings_controls['business-craft-copy-right-text'] = 
	array(
		'setting'						=>array(
			'default'					=>$business_craft_customizer_defaults['business-craft-copy-right-text']
		),
		'control'						=>array(
			'label'						=>__('Copy Right Footer Text','business_craft'),
			'section'					=>'business-craft-footer-section',
			'type'						=>'text',
			'priority'					=>20,
			'active_callback'			=>''
		)
	);
