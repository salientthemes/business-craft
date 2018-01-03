<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'http://themepalace.com', // Site where EDD is hosted
		'item_name'      => 'business-craft Pro', // Name of theme
		'theme_slug'     => 'business_craft pro', // Theme slug
		'version'        => '1.0.2', // The current version of this theme
		'author'         => 'eVision Themes', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => 'http://themepalace.com/my-account' // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'business-craft' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'business-craft' ),
		'license-key'               => __( 'License Key', 'business-craft' ),
		'license-action'            => __( 'License Action', 'business-craft' ),
		'deactivate-license'        => __( 'Deactivate License', 'business-craft' ),
		'activate-license'          => __( 'Activate License', 'business-craft' ),
		'status-unknown'            => __( 'License status is unknown.', 'business-craft' ),
		'renew'                     => __( 'Renew?', 'business-craft' ),
		'unlimited'                 => __( 'unlimited', 'business-craft' ),
		'license-key-is-active'     => __( 'License key is active.', 'business-craft' ),
		'expires%s'                 => __( 'Expires %s.', 'business-craft' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'business-craft' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'business-craft' ),
		'license-key-expired'       => __( 'License key has expired.', 'business-craft' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'business-craft' ),
		'license-is-inactive'       => __( 'License is inactive.', 'business-craft' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'business-craft' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'business-craft' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'business-craft' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'business-craft' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'business-craft' )
	)

);
