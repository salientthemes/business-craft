<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values feature portfolio options*/
$business_craft_customizer_defaults['business-craft-feature-slider-enable'] = 0;
$business_craft_customizer_defaults['business-craft-featured-slider-number'] = 2;
$business_craft_customizer_defaults['business-craft-featured-slider-selection'] = 'from-page';
$business_craft_customizer_defaults['business-craft-featured-slider-pages'] = 0;
$business_craft_customizer_defaults['business-craft-fs-single-words'] = 30;
$business_craft_customizer_defaults['business-craft-fs-enable-button'] = 1;
$business_craft_customizer_defaults['business-craft-fs-button-text'] = __('View More','business-craft');
/*creating panel for fonts-setting*/

$business_craft_sections['business-craft-featured-slider'] =
    array(
        'priority'       => 250,
        'title'          => __( 'Home Page Slider Section', 'business-craft' ),
   	);


/*Feature section enable control*/
$business_craft_settings_controls['business-craft-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Feature Slider', 'business-craft' ),
            'section'               => 'business-craft-featured-slider',
        	'description'    		=> __( 'Enable "Feature slider" on checked' , 'business-craft' ),
            'type'                  => 'checkbox',
            'priority'              => 5,
            'active_callback'       => ''
        )
    );

/*No of feature slider selection*/
$business_craft_settings_controls['business-craft-featured-slider-number'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-featured-slider-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Slider', 'business-craft' ),
            'section'               => 'business-craft-featured-slider',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'business-craft' ),
                2 => __( '2', 'business-craft' ),
                3 => __( '3', 'business-craft' ),
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*creating setting control for business-craft-fs-page start*/
$business_craft_repeated_settings_controls['business-craft-featured-slider-pages'] =
    array(
        'repeated' => 3,
        'business-craft-fs-pages-ids' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-featured-slider-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Slide %s', 'business-craft' ),
                'section'               => 'business-craft-featured-slider',
                'type'                  => 'dropdown-pages',
                'priority'              => 60,
                'description'           => ''
            )
        ),
    );


$business_craft_settings_controls['business-craft-fs-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-fs-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single Slider Number Of Words', 'business-craft' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'business-craft' ),
            'section'               => 'business-craft-featured-slider',
            'type'                  => 'number',
            'priority'              => 5,
            'active_callback'       => '',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
        )
    );

    $business_craft_settings_controls['business-craft-fs-enable-button'] =
        array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-fs-enable-button']
            ),
            'control' => array(
                'label'                 =>  __( 'Enable Button', 'business-craft' ),
                'section'               => 'business-craft-featured-slider',
                'type'                  => 'checkbox',
                'priority'              => 85,
                'active_callback'       => ''
            )
        );

    $business_craft_settings_controls['business-craft-fs-button-text'] =
        array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-fs-button-text']
            ),
            'control' => array(
                'label'                 =>  __( 'Slider Button Text', 'business-craft' ),
                'section'               => 'business-craft-featured-slider',
                'type'                  => 'text',
                'priority'              => 85,
                'active_callback'       => ''
            )
        );
