<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;

// create panel for singele button
$business_craft_panels['business-craft-single-button-panel'] = 
	array(
		'title'   	=>__('Home Single Button Section','business-craft'),
		'priority'	=>280
	);

// require single button options
require get_template_directory(). '/inc/customizer/home-single-button/options.php';

