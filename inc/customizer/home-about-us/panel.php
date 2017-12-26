<?php 
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defults;

// crate a panle for baout us
$business_craft_panels['business_craft_about_panel'] = 
	array(
		'title'		=>__('Home About Us','business_craft'),
		'priority'  =>270
	);

// require  a aboust us option
require get_template_directory() .'/inc/customizer/home-about-us/options.php';

// about us from page
require get_template_directory() .'/inc/customizer/home-about-us/from-page.php';
