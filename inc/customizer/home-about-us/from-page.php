<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-page-selection'] = 2;
$business_craft_customizer_defaults['business-craft-about-us-page'] = 0;
$business_craft_customizer_defaults['business-craft-about-us-single-word'] = 30;

// section about us from page
$business_craft_sections['business-craft-about-us-setting'] = 
	array(
		'title'			=>__('From Page','business-craft'),
		'panel'			=>'business_craft_about_panel',
		'priority'		=>10
	);

$business_craft_settings_controls['business-craft-page-selection'] =
	array(
		'setting'				=>	array(
			'default'			=>$business_craft_customizer_defaults['business-craft-page-selection']
		),
		'control'				=>array(
			'label'				=>esc_html__('Select Number Of Page','business-craft'),
			'section'			=>'business-craft-about-us-setting',
			'type'				=> 'select',
			'choices'			=>array(
				1				=> esc_html__('1','business-craft'),
				2 				=> esc_html__('2','business-craft')
			),
			'priority'			=> 15,
			'active_callback' =>''
		)
	);

$business_craft_settings_controls['business-craft-about-us-single-word'] =
	array(
		'setting'				=>	array(
			'default'			=>$business_craft_customizer_defaults['business-craft-about-us-single-word']
		),
		'control'				=>array(
			'label'				=>esc_html__('Select Number Of Page','business-craft'),
			'section'			=>'business-craft-about-us-setting',
			'type'				=> 'number',
			'priority'			=> 20,
			'input_attrs'		=>array('min' =>1,'max' =>200),
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
            'label'                 =>  esc_html__( 'Select Page  %s', 'business-craft' ),
            'section'               => 'business-craft-about-us-setting',
            'type'                  => 'dropdown-pages',
            'priority'              => 25,
        )
    ),
);

