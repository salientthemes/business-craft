<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values feature portfolio options*/
$business_craft_customizer_defaults['business-craft-home-testimonial-enable'] = 0;
$business_craft_customizer_defaults['business-craft-home-testimonial-main-title'] =  __('Client Testimonials','business-craft');
$business_craft_customizer_defaults['business-craft-home-testimonial-number'] = 3;
$business_craft_customizer_defaults['business-craft-home-testimonial-single-words'] = 30;
$business_craft_customizer_defaults['business-craft-home-testimonial-selection'] = 'from-page';
$business_craft_customizer_defaults['business-craft-home-testimonial-pages'] = 0;


/*creating panel for fonts-setting*/

$business_craft_sections['business-craft-home-testimonial'] =
    array(
        'title'          => __( 'Home Page Testimonial Section', 'business-craft' ),
        'priority'       => 160
   	);

$business_craft_settings_controls['business-craft-home-testimonial-enable'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-testimonial-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Testimonial', 'business-craft' ),
            'description'           => __( 'Enable "Testimonial selection" on checked', 'business-craft' ),
            'section'               => 'business-craft-home-testimonial',
            'type'                  => 'checkbox',
            'priority'              => 2,
            'active_callback'       => ''
        )
    );



/*Testimonial Title control*/
$business_craft_settings_controls['business-craft-home-testimonial-main-title'] =
array(
    'setting' =>     array(
        'default'              => $business_craft_customizer_defaults['business-craft-home-testimonial-main-title']
    ),
    'control' => array(
        'label'                 =>  __( 'Testimonial Section Title', 'business-craft' ),
        'section'               => 'business-craft-home-testimonial',
        'type'                  => 'text',
        'priority'              => 5,
        'active_callback'       => ''
    )
);

/*No of Testimonial needed*/
$business_craft_settings_controls['business-craft-home-testimonial-number'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-testimonial-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Testimonial/s', 'business-craft' ),
            'description'           => __( 'Choose number of Testimonial to be displayed', 'business-craft' ),
            'section'               => 'business-craft-home-testimonial',
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

/*String in max to be appear as description on testimonial*/
$business_craft_settings_controls['business-craft-home-testimonial-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-testimonial-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single Testimonial- Number Of Words', 'business-craft' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'business-craft' ),
            'section'               => 'business-craft-home-testimonial',
            'type'                  => 'number',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

/*creating setting control for business-craft-home-testimonial-page start*/
$business_craft_repeated_settings_controls['business-craft-home-testimonial-pages'] =
    array(
        'repeated' => 3,
        'business-craft-home-testimonial-pages-ids' => array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-home-testimonial-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select Page For Testimonial %s', 'business-craft' ),
                'section'               => 'business-craft-home-testimonial',
                'type'                  => 'dropdown-pages',
                'priority'              => 90,
                'description'           => ''
            )
        ),
        'business-craft-home-testimonial-pages-divider' => array(
            'control' => array(
                'section'               => 'business-craft-home-testimonial',
                'type'                  => 'message',
                'priority'              => 90,
                'description'           => '<hr />'
            )
        )
    );

