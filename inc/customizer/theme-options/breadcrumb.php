<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-enable-breadcrumb'] = 1;

$business_craft_sections['business-craft-breadcrumb-options'] =
    array(
        'priority'       => 50,
        'title'          => esc_html__( 'Breadcrumb Options', 'business-craft' ),
        'panel'          => 'business-craft-theme-panel',
    );

$business_craft_settings_controls['business-craft-enable-breadcrumb'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-enable-breadcrumb'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Breadcrumb', 'business-craft' ),
            'section'               => 'business-craft-breadcrumb-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );