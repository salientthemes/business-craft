<?php
/**
 * The default template for displaying header
 *
 * @package slient themes
 * @subpackage business-craft
 * @since business-craft 1.0.0
 */

/**
 * business_craft_action_before_head hook
 * @since business-craft 1.0.0
 *
 * @hooked business_craft_set_global -  0
 * @hooked business_craft_doctype -  10
 */
do_action( 'business_craft_action_before_head' );?>
<head>

	<?php
	/**
	 * business_craft_action_before_wp_head hook
	 * @since business-craft 1.0.0
	 *
	 * @hooked business_craft_before_wp_head -  10
	 */
	do_action( 'business_craft_action_before_wp_head' );

	wp_head();

	/**
	 * business_craft_action_after_wp_head hook
	 * @since business_craft 0.0.1
	 *
	 * @hooked null
	 */
	do_action( 'business_craft_action_after_wp_head' );
	?>
</head>
<body <?php body_class(); ?>>


<?php
/**
 * business_craft_action_before hook
 * @since business-craft 1.0.0
 *
 * @hooked business_craft_page_start - 15
 */
do_action( 'business_craft_action_before' );

/**
 * business_craft_action_pre_loader_header hook
 * @since business_craft 0.0.1
 *
 * @hooked business_craft_action_pre_loader_header - 10
 */
do_action( 'business_craft_action_pre_loader_header' );

/**
 * business_craft_action_after_page_id hook
 * @since business-craft 1.0.0
 *
 * @hooked business_craft_social_menu - 15
 */
do_action( 'business_craft_action_after_page_id' );

/**
 * business_craft_action_before_header hook
 * @since business-craft 1.0.0
 *
 * @hooked business_craft_skip_to_content - 10
 */
do_action( 'business_craft_action_before_header' );

/**
 * business_craft_action_header hook
 * @since business-craft 1.0.0
 *
 * @hooked business_craft_after_header - 10
 */
do_action( 'business_craft_action_header' );


/**
 * business_craft_action_after_header hook
 * @since business-craft 1.0.0
 *
 * @hooked null
 */
do_action( 'business_craft_action_after_header' );

// do_action('business_craft_action_kabi_header');

