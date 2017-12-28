<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-select-number-page'] = 3;

// create panel for singele button
$business_craft_sections['business-craft-our-service-section'] = 
	array(
		'title'   	=>__('Our Service Setting','business_craft'),
		'panel'		=>'business-craft-our-service-panel',
		'priorty'	=>10
	);





