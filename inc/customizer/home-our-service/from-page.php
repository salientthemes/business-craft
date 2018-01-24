<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

$business_craft_customizer_defaults['business-craft-number-of-word'] = 16;
$business_craft_customizer_defaults['business-craft-select-number-page'] = 3;
$business_craft_customizer_defaults['business-craft-our-service-page-title'] = '';
$business_craft_customizer_defaults['business-craft-our-service-page'] = '';
$business_craft_customizer_defaults['business-craft-our-service-image'] = get_template_directory().'/assets/images/bg1.jpg';

$business_craft_customizer_defaults['business-craft-our-service-icon'] = __('fa fa-desktop','business-craft');
$business_craft_customizer_defaults['business-craft-our-service-icon-color'] = '#151915';


// create panel for singele button
$business_craft_sections['business-craft-our-service-section-page'] = 
	array(
		'title'   	=>__('Our Service Select Page','business-craft'),
		'panel'		=>'business-craft-our-service-panel',
		'priorty'	=>10
	);


$business_craft_settings_controls['business-craft-number-of-word'] = 
    array(
        'setting'               => array(
            'default'           =>$business_craft_customizer_defaults['business-craft-number-of-word']
        ),
        'control'               =>array(
            'label'             =>__('Number of word','business-craft'),
            'section'           =>'business-craft-our-service-section-page',
            'type'              =>'number',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
            'priority'          =>10,
            'active_callback'   =>''    
        )
    );

$business_craft_settings_controls['business-craft-select-number-page'] = 
	array(
		'setting' 				=> array(
			'default'			=>$business_craft_customizer_defaults['business-craft-select-number-page']
		),
		'control'				=>array(
			'label' 			=>__('Select Number of pages','business-craft'),
			'section'			=>'business-craft-our-service-section-page',
			'type'				=>'select',
			'choices'			=>array(
				1				=> __('1','business-craft'),
				2				=> __('2','business-craft'),
				3 				=>__('3','business-craft')
			),
			'priority'			=>20,
			'active_callback'	=>''	
		)
	);

$business_craft_repeated_settings_controls['business-craft-our-service-page'] =
    array(
        'repeated' => 3,
        'business-craft-our-service-icon' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-our-service-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Our Page Icon %s', 'business-craft' ),
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s . %2$s See more here %3$s', 'business-craft' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
                'section'               => 'business-craft-our-service-section-page',
                'type'                  => 'text',
                'priority'              => 30,
            )
        ),
        'business-craft-our-service-icon-color' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-our-service-icon-color'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Icon Color For Our Page %s', 'business-craft' ),
                'section'               => 'business-craft-our-service-section-page',
                'type'                  => 'color',
                'priority'              => 30,
                'description'           => ''
            )
        ),

        'business-craft-desgin-develop-pages-ids' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-our-service-page'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Our Page %s', 'business-craft' ),
                'section'               => 'business-craft-our-service-section-page',
                'type'                  => 'dropdown-pages',
                'priority'              => 30,
                'description'           => ''
            )
        ),
        
    );

