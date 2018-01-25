<?php

global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_repeated_settings_controls;
global $business_craft_customizer_defaults;
global $wp_version;

if (version_compare($wp_version, '4.5', '<')) {
    /*defaults values*/
    $business_craft_customizer_defaults['business-craft-logo'] = '';
    $business_craft_customizer_defaults['business-craft-title-tagline-message'] = sprintf( __( '%$1s If you do not have a logo %$2s', 'business-craft' ), '<span class="customize-control-title">','</span>' );
    $business_craft_customizer_defaults['business-craft-enable-title'] = 1;
    $business_craft_customizer_defaults['business-craft-enable-tagline'] = 1;

    /*creating setting control*/
    $business_craft_settings_controls['business-craft-logo'] =
        array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-logo'],
            ),
            'control' =>   array(
                'label'                 =>    __( 'Logo', 'business-craft' ),
                'section'               =>   'title_tagline',
                'type'                  =>   'image',
                'priority'              =>   70,
                'description'           =>    __( 'Recommended logo size 165*50', 'business-craft' ),
                'active_callback'       =>   ''
            )
        );

    /*enable option for enable tagline in header*/
    $business_craft_settings_controls['business-craft-title-tagline-message'] =
        array(
            'control' =>   array(
                'description'           =>    $business_craft_customizer_defaults['business-craft-title-tagline-message'],
                'section'               =>   'title_tagline',
                'type'                  =>   'message',
                'priority'              =>   75,
                'active_callback'       =>   ''
            )
        );
    /*enable option for enable tagline in header*/
    $business_craft_settings_controls['business-craft-enable-title'] =
        array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-enable-title'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Enable Title', 'business-craft' ),
                'section'               =>   'title_tagline',
                'type'                  =>   'checkbox',
                'priority'              =>   80,
                'active_callback'       =>   ''
            )
        );
    $business_craft_settings_controls['business-craft-enable-tagline'] =
        array(
            'setting' =>       array(
                'default'              =>   $business_craft_customizer_defaults['business-craft-enable-tagline'],
            ),
            'control' =>   array(
                'label'                 =>    esc_html__( 'Enable Tagline', 'business-craft' ),
                'section'               =>   'title_tagline',
                'type'                  =>   'checkbox',
                'priority'              =>   90,
                'active_callback'       =>   ''
            )
        );
}
