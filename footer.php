<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package Business_Craft 
 * @since Business_Craft 1.0.0
 */

/**
 * business_craft_action_after_content hook
 * @since Business_Craft 1.0.0
 *
 * @hooked null
 */
do_action( 'business_craft_action_after_content' );

/**
 * business_craft_action_before_footer hook
 * @since Business_Craft 1.0.0
 *
 * @hooked business_craft_before_footer - 10
 */
do_action( 'business_craft_action_before_footer' );

/**
 * business_craft_action_widget_before_footer hook
 * @since Business_Craft 1.0.0
 *
 * @hooked business_craft_widget_before_footer - 10
 */
do_action( 'business_craft_action_widget_before_footer' );

/**
 * business_craft_action_footer hook
 * @since Business_Craft 1.0.0
 *
 * @hooked business_craft_footer - 10
 */
do_action( 'business_craft_action_footer' );

/**
 * business_craft_action_after_footer hook
 * @since Business_Craft 1.0.0
 *
 * @hooked null
 */
do_action( 'business_craft_action_after_footer' );

/**
 * business_craft_action_after hook
 * @since Business_Craft 1.0.0
 *
 * @hooked business_craft_page_end - 10
 */
do_action( 'business_craft_action_after' );
?>
<?php wp_footer(); ?>
</body>
</html>