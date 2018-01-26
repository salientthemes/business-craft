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

$business_craft_customizer_defaults['business-craft-our-service-icon'] = esc_html__('fa fa-desktop','business-craft');
$business_craft_customizer_defaults['business-craft-our-service-icon-color'] = '#151915';

$business_craft_customizer_defaults['business-craft-our-service-enable'] = 0;
$business_craft_customizer_defaults['business-craft-main-title-text'] = esc_html__('DESIGN. DEVELOP. DEDICATE','business-craft');


// create panel for singele button
$business_craft_sections['business-craft-our-service-section-page'] = 
	array(
		'title'   	=>  esc_html__('Our Service','business-craft'),
		'panel'		=>  'business_craft_home_panel',
		'priority'	=>  30
	);

    // option's cntrol section
    $business_craft_settings_controls['business-craft-our-service-enable'] = 
        array(
            'setting'               =>   array(
                'default'           =>  $business_craft_customizer_defaults['business-craft-our-service-enable']
            ),
            'control'               =>  array(
                'label'             =>  esc_html__('Enable Our Service ','business-craft'),
                'section'           =>  'business-craft-our-service-section-page',
                'type'              =>  'checkbox',
                'priority'          =>  10,
                'active_callback'   =>  ''  
            )
        );


    $business_craft_settings_controls['business-craft-main-title-text'] = 
        array(
            'setting'               =>   array(
                'default'           =>  $business_craft_customizer_defaults['business-craft-main-title-text']
            ),
            'control'               =>  array(
                'label'             =>  esc_html__('Main Title Text Here','business-craft'),
                'section'           =>  'business-craft-our-service-section-page',
                'type'              =>  'text',
                'priority'          =>  15,
                'active_callback'   =>  ''  
            )
        );


$business_craft_settings_controls['business-craft-number-of-word'] = 
    array(
        'setting'               =>   array(
            'default'           =>  $business_craft_customizer_defaults['business-craft-number-of-word']
        ),
        'control'               =>  array(
            'label'             =>  esc_html__('Number of word','business-craft'),
            'section'           =>  'business-craft-our-service-section-page',
            'type'              =>  'number',
            'input_attrs' =>   array( 'min' =>   1, 'max' =>   200),
            'priority'          =>  20,
            'active_callback'   =>  ''    
        )
    );

$business_craft_settings_controls['business-craft-select-number-page'] = 
	array(
		'setting' 				=>   array(
			'default'			=>  $business_craft_customizer_defaults['business-craft-select-number-page']
		),
		'control'				=>  array(
			'label' 			=>  esc_html__('Select Number of pages','business-craft'),
			'section'			=>  'business-craft-our-service-section-page',
			'type'				=>  'select',
			'choices'			=>  array(
				1				=>   esc_html__('1','business-craft'),
				2				=>   esc_html__('2','business-craft'),
				3 				=>  esc_html__('3','business-craft')
			),
			'priority'			=>  25,
			'active_callback'	=>  ''	
		)
	);

$business_craft_repeated_settings_controls['business-craft-our-service-page'] =
    array(
        'repeated' =>   3,
        'business-craft-our-service-icon' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-our-service-icon'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Page Icon %s', 'business-craft' ),
                'description'           =>   sprintf( esc_html__( 'Use font awesome icon: Eg: %1$s . %2$s See more here %3$s', 'business-craft' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
                'section'               =>   'business-craft-our-service-section-page',
                'type'                  =>   'text',
                'priority'              =>   30,
            )
        ),
        'business-craft-our-service-icon-color' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-our-service-icon-color'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Icon Color For Our Page %s', 'business-craft' ),
                'section'               =>   'business-craft-our-service-section-page',
                'type'                  =>   'color',
                'priority'              =>   35,
                'description'           =>   ''
            )
        ),

        'business-craft-desgin-develop-pages-ids' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-our-service-page'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Our Page %s', 'business-craft' ),
                'section'               =>   'business-craft-our-service-section-page',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   40,
                'description'           =>   ''
            )
        ),
        
    );

