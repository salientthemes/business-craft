<?php
global $business_craft_panels;
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defults;

/*defaults values*/
$business_craft_customizer_defults['business-craft-enable-static-page'] = 1;

$business_craft_customizer_defults['business-craft-default-layout'] = 'right-sidebar';
$business_craft_customizer_defults['business-craft-number-of-words'] = 30;
$business_craft_customizer_defults['business-craft-archive-layout'] = 'thumbnail-and-excerpt';
$business_craft_customizer_defults['business-craft-archive-image-align'] = 'full';
$business_craft_customizer_defults['business-craft-single-post-image-align'] = 'full';
$business_craft_customizer_defults['business-craft-single-post-image'] = '';

$business_craft_sections['business-craft-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Layout Options', 'business-craft' ),
        'panel'          => 'business-craft-theme-panel',
    );


/*home page static page display*/
$business_craft_settings_controls['business-craft-enable-static-page'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-enable-static-page'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Static Front Page', 'business-craft' ),
            'description'           =>  __( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );
    
/*layout-options option responsive lodader start*/
$business_craft_settings_controls['business-craft-default-layout'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-default-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default Layout', 'business-craft' ),
            'description'           =>  __( 'Layout for all archives, single posts and pages', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'right-sidebar' => __( 'Content - Primary Sidebar', 'business-craft' ),
                'left-sidebar' => __( 'Primary Sidebar - Content', 'business-craft' ),
                'no-sidebar' => __( 'No Sidebar', 'business-craft' )
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$business_craft_settings_controls['business-craft-archive-layout'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-archive-layout'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Archive Layout', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'excerpt-only' => esc_html__( 'Excerpt Only', 'business-craft' ),
                'thumbnail-and-excerpt' => esc_html__( 'Thumbnail and Excerpt', 'business-craft' ),
            ),
            'priority'              => 34,
        )
    );


$business_craft_settings_controls['business-craft-archive-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-archive-image-align'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Archive Image Alignment', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => esc_html__( 'Full', 'business-craft' ),
                'right' => esc_html__( 'Right', 'business-craft' ),
            ),
            'priority'              => 35,
            'description'              => esc_html__('This option only work if you have selected "Thumbnail and Excerpt" or "Thumbnail and Full Post" in Archive Layout options','business-craft'),
        )
    );

$business_craft_settings_controls['business-craft-number-of-words'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-number-of-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Words For Excerpt', 'business-craft' ),
            'description'           =>  __( 'This will controll the excerpt length on listing page', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'number',
            'input_attrs' => array( 'min' => 1, 'max' => 200),
            'priority'              => 40,
            'active_callback'       => ''
        )
    );


$business_craft_settings_controls['business-craft-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defults['business-craft-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  __( 'Alignment Of Image In Single Post/Page', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => __( 'Full', 'business-craft' ),
                'right' => __( 'Right', 'business-craft' ),
                'left' => __( 'Left', 'business-craft' ),
                'no-image' => __( 'No image', 'business-craft' )
            ),
            'priority'              => 50,
            'description'           =>  __( 'Please note that this setting can be override from individual post/page', 'business-craft' ),
        )
    );