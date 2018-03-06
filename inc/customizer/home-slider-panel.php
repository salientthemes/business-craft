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
$business_craft_customizer_defaults['business-craft-fs-button-text'] = esc_html__('View More','business-craft');
/*creating panel for fonts-setting*/

$business_craft_sections['business-craft-featured-slider'] =
    array(
        'priority'       =>   10,
        'title'          =>   esc_html__( 'Slider', 'business-craft' ),
        'panel'             =>'business_craft_home_panel',
   	);


/*Feature section enable control*/
$business_craft_settings_controls['business-craft-feature-slider-enable'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-feature-slider-enable']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Enable Feature Slider', 'business-craft' ),
            'section'               =>   'business-craft-featured-slider',
        	'description'    		=>   esc_html__( 'Enable "Feature slider" on checked' , 'business-craft' ),
            'type'                  =>   'checkbox',
            'priority'              =>   5,
            'active_callback'       =>   ''
        )
    );

/*No of feature slider selection*/
$business_craft_settings_controls['business-craft-featured-slider-number'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-featured-slider-number']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Number Of Slider', 'business-craft' ),
            'section'               =>   'business-craft-featured-slider',
            'type'                  =>   'select',
            'choices'               =>   array(
                1 =>   esc_html__( '1', 'business-craft' ),
                2 =>   esc_html__( '2', 'business-craft' ),
            ),
            'priority'              =>   10,
            'active_callback'       =>   ''
        )
    );

/*creating setting control for business-craft-fs-page start*/
$business_craft_repeated_settings_controls['business-craft-featured-slider-pages'] =
    array(
        'repeated' =>   2,
        'business-craft-fs-pages-ids' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-featured-slider-pages'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Slide %s', 'business-craft' ),
                'section'               =>   'business-craft-featured-slider',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   60,
                'description'           =>   ''
            )
        ),
    );


$business_craft_settings_controls['business-craft-fs-single-words'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-fs-single-words']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Single Slider Number Of Words', 'business-craft' ),
            'description'           =>    esc_html__( 'If you do not have selected from - Custom', 'business-craft' ),
            'section'               =>   'business-craft-featured-slider',
            'type'                  =>   'number',
            'priority'              =>   5,
            'active_callback'       =>   '',
            'input_attrs' =>   array( 'min' =>   1, 'max' =>   200),
        )
    );

    $business_craft_settings_controls['business-craft-fs-enable-button'] =
        array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-fs-enable-button']
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Enable Button', 'business-craft' ),
                'section'               =>   'business-craft-featured-slider',
                'type'                  =>   'checkbox',
                'priority'              =>   85,
                'active_callback'       =>   ''
            )
        );

    $business_craft_settings_controls['business-craft-fs-button-text'] =
        array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-fs-button-text']
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Slider Button Text', 'business-craft' ),
                'section'               =>   'business-craft-featured-slider',
                'type'                  =>   'text',
                'priority'              =>   85,
                'active_callback'       =>   ''
            )
        );
