<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-enable-top-social-meanu-icon'] = 1;

$business_craft_sections['business-craft-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Layout Options', 'business-craft' ),
        'panel'          => 'business-craft-theme-panel',
    );


/*home page static page display*/
$business_craft_settings_controls['business-craft-enable-top-social-meanu-icon'] =
    array(
        'setting' =>     array(
            'default'              => $business_craft_customizer_defaults['business-craft-enable-top-social-meanu-icon'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable top meanu social icon', 'business-craft' ),
            'description'           =>  __( 'If you disable a menu top social icon it will not appear in the top meanu bar', 'business-craft' ),
            'section'               => 'business-craft-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );
