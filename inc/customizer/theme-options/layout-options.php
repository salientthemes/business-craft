<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-enable-static-page'] = 1;
$business_craft_customizer_defaults['business-craft-default-banner-image'] = get_template_directory_uri().'/assets/images/banner-image.jpg';
$business_craft_customizer_defaults['business-craft-default-layout'] = 'right-sidebar';
$business_craft_customizer_defaults['business-craft-number-of-words'] = 30;
$business_craft_customizer_defaults['business-craft-archive-layout'] = 'thumbnail-and-excerpt';
$business_craft_customizer_defaults['business-craft-archive-image-align'] = 'full';
$business_craft_customizer_defaults['business-craft-single-post-image-align'] = 'full';
$business_craft_customizer_defaults['business-craft-single-post-image'] = '';



$business_craft_sections['business-craft-layout-options'] =
    array(
        'priority'       =>   20,
        'title'          =>   esc_html__( 'Layout Options', 'business-craft' ),
        'panel'          =>   'business-craft-theme-panel',
    );


/*home page static page display*/
$business_craft_settings_controls['business-craft-enable-static-page'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-enable-static-page'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Enable Static Front Page', 'business-craft' ),
            'description'           =>    esc_html__( 'If you disable this the static page will be disappear form the home page and other section from customizer will remain as it is', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'checkbox',
            'priority'              =>   10,
        )
    );

// banner image option
$business_craft_settings_controls['business-craft-default-banner-image'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-default-banner-image']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Default Banner Image', 'business-craft' ),
            'description'           =>    esc_html__( 'Please note that if you remove this image default banner image will appear', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'image',
            'priority'              =>   15,
            'active_callback'       =>   ''
        )
    );

/*layout-options option responsive lodader start*/
$business_craft_settings_controls['business-craft-default-layout'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-default-layout'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Default Layout', 'business-craft' ),
            'description'           =>    esc_html__( 'Layout for all archives, single posts and pages', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'select',
            'choices'               =>   array(
                'right-sidebar' =>   esc_html__( 'Content - Primary Sidebar', 'business-craft' ),
                'left-sidebar' =>   esc_html__( 'Primary Sidebar - Content', 'business-craft' ),
                'no-sidebar' =>   esc_html__( 'No Sidebar', 'business-craft' )
            ),
            'priority'              =>   30,
            'active_callback'       =>   ''
        )
    );

$business_craft_settings_controls['business-craft-archive-layout'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-archive-layout'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Archive Layout', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'select',
            'choices'               =>   array(
                'excerpt-only' =>   esc_html__( 'Excerpt Only', 'business-craft' ),
                'thumbnail-and-excerpt' =>   esc_html__( 'Thumbnail and Excerpt', 'business-craft' ),
            ),
            'priority'              =>   34,
        )
    );


$business_craft_settings_controls['business-craft-archive-image-align'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-archive-image-align'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Archive Image Alignment', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'select',
            'choices'               =>   array(
                'full' =>   esc_html__( 'Full', 'business-craft' ),
                'right' =>   esc_html__( 'Right', 'business-craft' ),
            ),
            'priority'              =>   35,
            'description'              =>   esc_html__('This option only work if you have selected "Thumbnail and Excerpt" or "Thumbnail and Full Post" in Archive Layout options','business-craft'),
        )
    );

$business_craft_settings_controls['business-craft-number-of-words'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-number-of-words']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Number Of Words For Excerpt', 'business-craft' ),
            'description'           =>    esc_html__( 'This will controll the excerpt length on listing page', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'number',
            'input_attrs' =>   array( 'min' =>   1, 'max' =>   200),
            'priority'              =>   40,
            'active_callback'       =>   ''
        )
    );


$business_craft_settings_controls['business-craft-single-post-image-align'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-single-post-image-align'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Alignment Of Image In Single Post/Page', 'business-craft' ),
            'section'               =>   'business-craft-layout-options',
            'type'                  =>   'select',
            'choices'               =>   array(
                'full'      =>   esc_html__( 'Full', 'business-craft' ),
                'right'     =>   esc_html__( 'Right', 'business-craft' ),
                'left'      =>   esc_html__( 'Left', 'business-craft' ),
                'no-image'  =>   esc_html__( 'No image', 'business-craft' )
            ),
            'priority'              =>   50,
            'description'           =>    esc_html__( 'Please note that this setting can be override from individual post/page', 'business-craft' ),
        )
    );

