<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-select-page-from'] = 2;
$business_craft_customizer_defaults['business-craft-about-us-page'] = 3;
$business_craft_customizer_defaults['business-craft-about-us-title'] = __('Ultra Responsive Design','business_craft');
$business_craft_customizer_defaults['business-craft-about-us-content'] = __('','business_craft');

// section about us from page
$business_craft_sections['business-craft-about-us-setting'] = 
	array(
		'title'			=>__('From Page','business_craft'),
		'panel'			=>'business_craft_about_panel',
		'priority'		=>10
	);
$business_craft_settings_controls['business-craft-select-page-from'] =
	array(
		'setting'				=>	array(
			'default'			=>$business_craft_customizer_defaults['business-craft-select-page-from']
		),
		'control'				=>array(
			'label'				=>__('Select Number Of Page','business_craft'),
			'section'			=>'business-craft-about-us-setting',
			'type'				=> 'select',
			'choices'			=>array(
				1				=> __('1','business_craft'),
				2 				=> __('2','business_craft')
			),
			'priority'			=> 15,
			'active_callback' =>''
		)
	);


$business_craft_repeated_settings_controls['business-craft-about-us-page'] =
array(
    'repeated' => 2,
    'business-craft-about-us-pages-id' => array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-about-us-page'],
        ),
        'control' => array(
            'label'                 =>  __( 'Select Page  %s', 'business_craft' ),
            'section'               => 'business-craft-about-us-setting',
            'type'                  => 'dropdown-pages',
            'priority'              => 50,
        )
    ),
);

