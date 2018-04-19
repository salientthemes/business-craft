<?php
global $business_craft_sections;
global $business_craft_settings_controls;
global $business_craft_customizer_defaults;

/*defaults values*/
$business_craft_customizer_defaults['business-craft-site-identity-color'] = '#313131';
$business_craft_customizer_defaults['business-craft-primary-color'] = '#0288d1';
$business_craft_customizer_defaults['business-craft-heading-title-color'] = '#000000';
// $business_craft_customizer_defaults['business-craft-color-reset'] = '';

/*Default color*/
$business_craft_sections['colors'] = array(
        'priority'       => 40,
        'title'          => esc_html__( 'Colors Options', 'business-craft' )
    );



/**
 * Reset color settings to default
 *
 * @since business-craft 1.0.0
 */
// if ( ! function_exists( 'business_craft_color_reset' ) ) :
//     function business_craft_color_reset( ) {
        
//         global$business_craft_customizer_saved_values;
//         $business_craft_customizer_saved_values = business_craft_get_all_options();
//         if ($business_craft_customizer_saved_values['business-craft-color-reset'] == 1 ) {
//             global$business_craft_customizer_defaults;
//             global$business_craft_customizer_saved_values;
//             /*getting fields*/

//             /*setting fields */
//            $business_craft_customizer_saved_values['business-craft-site-identity-color'] =$business_craft_customizer_defaults['business-craft-site-identity-color'] ;
//            $business_craft_customizer_saved_values['business-craft-primary-color'] =$business_craft_customizer_defaults['business-craft-primary-color'] ;
//            $business_craft_customizer_saved_values['business-craft-heading-title-color'] = $business_craft_customizer_defaults['business-craft-heading-title-color'];
          
//             remove_theme_mod( 'background_color' );
//            $business_craft_customizer_saved_values['business-craft-color-reset'] = '';
//             /*resetting fields*/
//             business_craft_reset_options($business_craft_customizer_saved_values );
            
//         }
//         else {
//             return '';
//         }
//     }
// endif;
// add_action( 'customize_save_after','business_craft_color_reset' );




$business_craft_settings_controls['business-craft-site-identity-color'] = array(
    'setting' =>  array(
        'default'  => $business_craft_customizer_defaults['business-craft-site-identity-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Site Identity Color', 'business-craft' ),
        'description'           =>  esc_html__( 'Site title and tagline color', 'business-craft' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 20,
        'active_callback'       => ''
    )
);

$business_craft_settings_controls['business-craft-primary-color'] = array(
    'setting' => array(
        'default' => $business_craft_customizer_defaults['business-craft-primary-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Primary Color', 'business-craft' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 30,
        'active_callback'       => ''
    )
);



$business_craft_settings_controls['business-craft-heading-title-color'] = array(
    'setting' => array(
        'default' => $business_craft_customizer_defaults['business-craft-heading-title-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( ' Heading Title Color', 'business-craft' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 45,
        'active_callback'       => ''
    )
);




// $business_craft_settings_controls['business-craft-color-reset'] = array(
//     'setting' => array(
//         'default'   => $business_craft_customizer_defaults['business-craft-color-reset'],
//         'transport'            => 'postmessage',
//     ),
//     'control' => array(
//         'label'                 =>  esc_html__( 'Reset', 'business-craft' ),
//         'description'           =>  esc_html__( 'Caution: Reset all color settings above to default. Refresh the page after saving to view the effects', 'business-craft' ),
//         'section'               => 'colors',
//         'type'                  => 'checkbox',
//         'priority'              => 220,
//         'active_callback'       => ''
//     )
// );