<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-enable-top-social-meanu-icon'] = 0;

$business_craft_sections['business-craft-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => esc_html__( 'Layout Options', 'business-craft' ),
        'panel'          => 'business-craft-theme-panel',
    );


/*home page static page display*/
$business_craft_settings_controls['business-craft-enable-top-social-meanu-icon'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-enable-top-social-meanu-icon'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable top menu social icon', 'business-craft' ),
            'description'           =>  esc_html__( 'If you disable a menu top social icon it will not appear in the top menu bar', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );
