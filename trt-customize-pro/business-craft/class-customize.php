<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  0.0.1
 * @access public
 */
final class business_craft_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  0.0.1
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  0.0.1
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  0.0.1
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/business-craft/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'business_craft_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new business_craft_Customize_Section_Pro(
				$manager,
				'business-craft-update',
				array(
        			'priority'       => 10,					
					'pro_text' => esc_html__( 'Business Craft Pro  Buy Now',  'business-craft' ),
					'pro_url'  => 'https://www.salientthemes.com/product/business-craft-pro/'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'business-craft-customize-controls', trailingslashit( get_template_directory_uri() ) . 'trt-customize-pro/business-craft/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'business-craft-customize-controls', trailingslashit( get_template_directory_uri() ) . 'trt-customize-pro/business-craft/customize-controls.css' );
	}
}

// Doing this customizer thang!
business_craft_Customize::get_instance();
