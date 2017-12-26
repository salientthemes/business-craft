<?php 

global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;


$business_craft_customizer_defaults['business-craft-banner-image'] = get_template_directory().'/inc/assets/images/bg1.jpg';
$business_craft_customizer_defaults['business-craft-default-layout'] = 'right-sidebar';
$business_craft_customizer_defaults['business-craft-layout-excpert-length'] = 30;
$business_craft_customizer_defaults['business-craft-layout-image-anligment'] = 'center';

// created theme layout option's section
$business_craft_sections['business-craft-layout-section'] = 
	array(
		'title'				=>__('Layout Option','business_craft'),
		'panel'				=>'business-craft-theme-panel',
		'priority'			=>10
	);

// control section layout
$business_craft_settings_controls['business-craft-banner-image'] =
	array(
		'setting' 					=>array(
			'default'				=>$business_craft_customizer_defaults['business-craft-banner-image']
		),
		'control'					=>array(
			'label'					=>__('Default Banner Image','business_craft'),
			'description'			=>__('Please note that if you remove this image default banner image will appear','business_craft'),
			'section'				=>'business-craft-layout-section',
			'type'					=>'image',
			'priority'				=>10
		)
	);

// control section siderbar layout
$business_craft_settings_controls['business-craft-default-layout'] =
	array(
		'setting' 					=>array(
			'default'				=>$business_craft_customizer_defaults['business-craft-default-layout']
		),
		'control'					=>array(
			'label'					=>__('Default Layout','business_craft'),
			'description'           =>  __( 'Layout for all archives, single posts and pages', 'business_craft' ),
			'section'				=>'business-craft-layout-section',
			'type'					=>'select',
			'choices'				=>array(
				'right-sidebar' => __( 'Content - Primary Sidebar', 'business_craft' ),
                'left-sidebar' => __( 'Primary Sidebar - Content', 'business_craft' ),
                'no-sidebar' => __( 'No Sidebar', 'business_craft' )
			),
			'priority'				=>20
		)
	);

//number of archie  word lenght 
$business_craft_settings_controls['business-craft-layout-excpert-length'] =
	array(
		'setting' 					=>array(
			'default'				=>$business_craft_customizer_defaults['business-craft-layout-excpert-length']
		),
		'control'					=>array(
			'label'					=>__('Number Of Words Excpert','business_craft'),
			'description'           =>  __( 'This will controll the excerpt length on listing page', 'business_craft' ),
			'section'				=>'business-craft-layout-section',
			'type'					=>'number',
			'priority'				=>30,
			'input_attrs'			=>array('min' =>1,'max' =>2000)
		)
	);

// for image anligment
$business_craft_settings_controls['business-craft-layout-excpert-length'] =
	array(
		'setting' 					=>array(
			'default'				=>$business_craft_customizer_defaults['business-craft-layout-excpert-length']
		),
		'control'					=>array(
			'label'					=>__('Alignment Of Image In Single Post/Page','business_craft'),
			'description'           =>  __( 'Please note that this setting can be override form individual post/page', 'business_craft' ),
			'section'				=>'business-craft-layout-section',
			'type'					=>'select',
			'choices'				=>array(
				'full' => __( 'Full', 'business_craft' ),
                'right' => __( 'Right', 'business_craft' ),
                'left' => __( 'Left', 'business_craft' ),
                'no-image' => __( 'No image', 'business_craft' )
			),
			'priority'				=>40,
		)
	);