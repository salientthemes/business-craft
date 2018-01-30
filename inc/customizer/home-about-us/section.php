<?php 
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defults;

$business_craft_customizer_defaults['business-craft-about-us-enable-option'] = 0;
$business_craft_customizer_defaults['business-craft-page-selection'] = 2;
$business_craft_customizer_defaults['business-craft-about-us-page'] = 0;
$business_craft_customizer_defaults['business-craft-about-us-single-word'] = 30;
$business_craft_customizer_defaults['business-craft-about-us-main-title-text'] = esc_html__('ABOUT US','business-craft');


// crate a panle for baout us
$business_craft_sections['business_craft_about_panel'] = 
	array(
		'title'		=> esc_html__('About Us','business-craft'),
		'panel'		=> 'business_craft_home_panel',
		'priority'  =>20
	);

$business_craft_settings_controls['business-craft-about-us-enable-option'] = 
array(
	'setting' 				=>array(
		'default'           =>$business_craft_customizer_defults['business-craft-about-us-enable-option']
	),
	'control'				=>array(
		'label'				=>esc_html__('Enable About US ','business-craft' ),
		'section'			=>'business_craft_about_panel',
		'type'				=>'checkbox',
		'priority'			=>10,
		'activity_callback' =>''

	)
);

$business_craft_settings_controls['business-craft-about-us-main-title-text'] = 
	array(
		'setting' 				=>array(
			'default'           =>$business_craft_customizer_defults['business-craft-about-us-main-title-text']
		),
		'control'				=>array(
			'label'				=>esc_html__('Title text ','business-craft' ),
			'section'			=>'business_craft_about_panel',
			'type'				=>'text',
			'priority'			=>15,
			'activity_callback' =>''

		)
	);

$business_craft_settings_controls['business-craft-page-selection'] =
	array(
		'setting'				=>	array(
			'default'			=>$business_craft_customizer_defaults['business-craft-page-selection']
		),
		'control'				=>array(
			'label'				=>esc_html__('Select Number Of Page','business-craft'),
			'section'			=>'business_craft_about_panel',
			'type'				=> 'select',
			'choices'			=>array(
				1				=> esc_html__('1','business-craft'),
				2 				=> esc_html__('2','business-craft')
			),
			'priority'			=> 20,
			'active_callback' =>''
		)
	);

$business_craft_settings_controls['business-craft-about-us-single-word'] =
	array(
		'setting'				=>	array(
			'default'			=>$business_craft_customizer_defaults['business-craft-about-us-single-word']
		),
		'control'				=>array(
			'label'				=>esc_html__('Select Number Of Word','business-craft'),
			'section'			=>'business_craft_about_panel',
			'type'				=> 'number',
			'priority'			=> 25,
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
            'section'               => 'business_craft_about_panel',
            'type'                  => 'dropdown-pages',
            'priority'              => 30,
        )
    ),
);
