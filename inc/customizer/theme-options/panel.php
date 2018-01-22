<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;


// created a panel for theme option's
$business_craft_panels['business-craft-theme-panel'] = 
	array(
		'title' 			=> __('Theme Option','business-craft'),
		'priority'			=> 320

	);

// about layout options 
require get_template_directory().'/inc/customizer/theme-options/layout-options.php';

// for footer section
require get_template_directory().'/inc/customizer/theme-options/footer.php';

//for back to up 
require get_template_directory().'/inc/customizer/theme-options/back-to-top.php';


// for top social meanu icon
require get_template_directory().'/inc/customizer/theme-options/top-social-menu-icon.php';

