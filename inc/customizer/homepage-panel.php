<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defults;

// crate a panle for home page
$business_craft_panels['business_craft_home_panel'] = 
	array(
		'title'		=> esc_html__('Home Page','business-craft'),
		'priority'  =>250
	);

// require  a slider option
require get_template_directory() .'/inc/customizer/home-slider-panel.php';

// require  a feature option
require get_template_directory() .'/inc/customizer/home-feature-panel.php';

// require  a about us option
require get_template_directory() .'/inc/customizer/home-about-us/section.php';

/*customizer single button section*/
require get_template_directory().'/inc/customizer/home-single-button/options.php';


// require service page ptions
require get_template_directory(). '/inc/customizer/home-our-service/from-page.php';

// require  a testimonials option
require get_template_directory() .'/inc/customizer/home-testimonial-panel.php';

/*customizer homepage blog section*/
require get_template_directory().'/inc/customizer/home-blog-panel.php';
