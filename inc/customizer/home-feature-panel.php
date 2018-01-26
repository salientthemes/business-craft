<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values feature portfolio options*/
$business_craft_customizer_defaults['business-craft-home-feature-enable'] = 0;
$business_craft_customizer_defaults['business-craft-home-feature-title'] = esc_html__('OUR FEATURE','business-craft');
$business_craft_customizer_defaults['business-craft-home-page-feature-single-words'] = 30;
$business_craft_customizer_defaults['business-craft-home-feature-selection'] = 'from-page';
$business_craft_customizer_defaults['business-craft-home-feature-number'] = 4;
$business_craft_customizer_defaults['business-craft-home-feature-page-icon'] = 'fa-desktop';
$business_craft_customizer_defaults['business-craft-home-feature-pages'] = 0;
$business_craft_customizer_defaults['business-craft-icon-color'] = '#401010';


/*creating panel for fonts-setting*/

$business_craft_sections['business-craft-home-feature'] =
    array(
        'title'          =>   esc_html__( 'Feature', 'business-craft' ),
        'panel'             =>'business_craft_home_panel',
        'priority'       =>   15
   	);

$business_craft_settings_controls['business-craft-home-feature-enable'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-home-feature-enable']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Enable Service', 'business-craft' ),
            'section'               =>   'business-craft-home-feature',
            'type'                  =>   'checkbox',
            'priority'              =>   10,
            'active_callback'       =>   ''
        )
    );


$business_craft_settings_controls['business-craft-home-feature-title'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-home-feature-title']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Feature Section Title', 'business-craft' ),
            'section'               =>   'business-craft-home-feature',
            'type'                  =>   'text',
            'priority'              =>   20,
            'active_callback'       =>   ''
        )
    );

$business_craft_settings_controls['business-craft-home-page-feature-single-words'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-home-page-feature-single-words']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Number Of Words in Single Column Content', 'business-craft' ),
            'description'           =>    esc_html__( 'If you do not have selected from - Custom', 'business-craft' ),
            'section'               =>   'business-craft-home-feature',
            'type'                  =>   'number',
            'priority'              =>   30,
            'input_attrs' =>   array( 'min' =>   1, 'max' =>   200),
            'active_callback'       =>   ''
        )
    );

$business_craft_repeated_settings_controls['business-craft-home-feature-font-icon'] =
    array(
        'repeated' =>   4,
        'business-craft-home-feature-page-icon' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-home-feature-page-icon'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Icon %s', 'business-craft' ),
                'section'               =>   'business-craft-home-feature',
                'type'                  =>   'text',
                'priority'              =>   40,
                'description'           =>   sprintf( esc_html__( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-craft' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
         'business-craft-icon-color'  =>  array(
            'setting'   =>    array(
                'default'       =>  $business_craft_customizer_defaults['business-craft-icon-color']
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Icon Color For Service %s', 'business-craft' ),
                'section'               =>   'business-craft-home-feature',
                'type'                  =>   'color',
                'priority'              =>   60,
                'description'           =>   ''
            )
        ),
        'business-craft-home-feature-pages-ids' =>   array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-home-feature-pages'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Select Page For Service %s', 'business-craft' ),
                'section'               =>   'business-craft-home-feature',
                'type'                  =>   'dropdown-pages',
                'priority'              =>   60,
                'description'           =>   ''
            )
        ),
       
    );
