<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-enable-back-to-top'] = 1;

$business_craft_sections['business-craft-back-to-top-options'] =
    array(
        'priority'       =>   80,
        'title'          =>   esc_html__( 'Back To Top Options', 'business-craft' ),
        'panel'          =>   'business-craft-theme-options'
    );

$business_craft_settings_controls['business-craft-enable-back-to-top'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_craft_customizer_defaults['business-craft-enable-back-to-top'],
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Enable Back To Top', 'business-craft' ),
            'section'               =>   'business-craft-back-to-top-options',
            'type'                  =>   'checkbox',
            'priority'              =>   50,
        )
    );