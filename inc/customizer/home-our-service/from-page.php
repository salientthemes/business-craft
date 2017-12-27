<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-number-of-word'] = 30;
$business_craft_customizer_defaults['business-craft-select-number-page'] = 3;
$business_craft_customizer_defaults['business-craft-design-develop-page'] = '';
$business_craft_customizer_defaults['business-craft-design-develop-page-icon'] = __('fa fa-desktop','business_craft');


// create panel for singele button
$business_craft_sections['business-craft-design-develop-section-page'] = 
	array(
		'title'   	=>__('Design Develop Select Page','business_craft'),
		'panel'		=>'business-craft-design-develop-panel',
		'priorty'	=>10
	);
$business_craft_settings_controls['business-craft-select-number-page'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-select-number-page']
		),
		'control'				=>array(
			'label' 			=>__('Select Number of pages','business_craft'),
			'section'			=>'business-craft-design-develop-section-page',
			'type'				=>'select',
			'choices'			=>array(
				1				=> __('1','business_craft'),
				2				=> __('2','business_craft'),
				3 				=>__('3','business_craft')
			),
			'priority'			=>20,
			'active_callback'	=>''	
		)
	);

$business_craft_repeated_settings_controls['business-craft-design-develop-page'] =
    array(
        'repeated' => 3,
        'business-craft-design-develop-pages-icon' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-design-develop-page-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Our Page Icon %s', 'chrimbo' ),
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s . %2$s See more here %3$s', 'chrimbo' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
                'section'               => 'business-craft-design-develop-section-page',
                'type'                  => 'text',
                'priority'              => 30,
            )
        ),

        'business-craft-desgin-develop-pages-ids' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-design-develop-page'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Our Page %s', 'chrimbo' ),
                'section'               => 'business-craft-design-develop-section-page',
                'type'                  => 'dropdown-pages',
                'priority'              => 30,
                'description'           => ''
            )
        ),
        
    );

