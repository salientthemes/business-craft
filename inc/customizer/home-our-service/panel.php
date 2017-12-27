<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;

// create panel for singele button
$business_craft_panels['business-craft-design-develop-panel'] = 
	array(
		'title'   	=>__('Design And Develop Section','business_craft'),
		'priority'	=>290
	);

// require single button options
require get_template_directory(). '/inc/customizer/home-our-service/options.php';

require get_template_directory(). '/inc/customizer/home-our-service/setting.php';

require get_template_directory(). '/inc/customizer/home-our-service/from-page.php';

