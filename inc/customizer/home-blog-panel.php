<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;


$business_craft_customizer_defaults['business-craft-home-blog-enable'] = 0;
$business_craft_customizer_defaults['business-craft-home-blog-title'] = __('FROM OUR BLOG','business-craft');
$business_craft_customizer_defaults['business-craft-home-blog-single-words'] = 30;
$business_craft_customizer_defaults['business-craft-home-blog-category'] = 0;
$business_craft_customizer_defaults['business-craft-home-blog-button-text'] = __('Browse more','business-craft');
$business_craft_customizer_defaults['business-craft-home-blog-button-link'] = home_url( '/blog' );

$business_craft_sections['business-craft-home-blog-panel'] =
    array(
        'priority'       => 190,
        'title'          => __( 'Home Page Blog Section', 'business-craft' ),
   	);

$business_craft_settings_controls['business-craft-home-blog-enable'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-blog-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Blog Section', 'business-craft' ),
            'description'           => __( 'Enable "Blog Section" on checked' , 'business-craft' ),
            'section'               => 'business-craft-home-blog-panel',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


$business_craft_settings_controls['business-craft-home-blog-title'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-blog-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Blog Section Title', 'business-craft' ),
            'section'               => 'business-craft-home-blog-panel',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );


    /*String in max to be appear as description on blog*/
    $business_craft_settings_controls['business-craft-home-blog-single-words'] =
        array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-home-blog-single-words']
            ),
            'control' => array(
                'label'                 =>  __( 'Number Of Words', 'business-craft' ),
                'description'           =>  __( 'Give number of words you wish to be appear on home page blog section sticky post/ feature post', 'business-craft' ),
                'section'               => 'business-craft-home-blog-panel',
                'type'                  => 'number',
                'priority'              => 40,
                'input_attrs' => array( 'min' => 1, 'max' => 200),
                'active_callback'       => ''
            )
        );

/*creating setting control for business-craft-fs-Category start*/
$business_craft_settings_controls['business-craft-home-blog-category'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-home-blog-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Blog', 'business-craft' ),
            'description'           =>  __( 'Blog will only displayed from this category', 'business-craft' ),
            'section'               => 'business-craft-home-blog-panel',
            'type'                  => 'category_dropdown',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );


    $business_craft_settings_controls['business-craft-home-blog-button-text'] =
        array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-home-blog-button-text']
            ),
            'control' => array(
                'label'                 =>  __( 'Browse All Button Text', 'business-craft' ),
                'section'               => 'business-craft-home-blog-panel',
                'type'                  => 'text',
                'priority'              => 70,
                'active_callback'       => ''
            )
        );

    $business_craft_settings_controls['business-craft-home-blog-button-link'] =
        array(
            'setting' =>     array(
                'default'              => $business_craft_customizer_defaults['business-craft-home-blog-button-link']
            ),
            'control' => array(
                'label'                 =>  __( 'Browse All Button Link', 'business-craft' ),
                'section'               => 'business-craft-home-blog-panel',
                'type'                  => 'url',
                'priority'              => 80,
                'active_callback'       => ''
            )
        );