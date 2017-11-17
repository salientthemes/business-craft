<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business-craft
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-craft' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->
            </div><!-- col -->
            <div class="nav-wrapper clearfix">
	            <div class="col-md-9 col-sm-9 col-xs-12">
					<nav id="site-navigation" class="col-md-11 main-navigation clearfix">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'business-craft' ); ?></button>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>						
					</nav><!-- #site-navigation -->
					<div class="top-header-search-share">
					   <i class="fa fa-share share" id="header-share"></i>
						<i class="fa fa-search" id="header-search"></i>
					</div>
					<div class="search-form-nav" id="top-search">
		                <?php get_search_form();?>
		            </div><!-- top-search -->
		            <div class="social-widget salient-social-section social-icon-only top-tooltip">
		            	<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'social-menu',
							) );
						?>		
		            </div>
				</div><!-- col -->
			</div><!-- wrapper-->
		</div><!-- container -->
	</header><!-- #masthead -->
	<section id="banner-section" class="banner-section"><!-- banner section -->
		<div class="banner-wrapper">
			<div class="banner-slider">
				<div class="overlay">
					<h1 class="sec-title">Wel come <span>to our business-craft theme</span></h1>
					<a class="border-btn" href="#">buy this now</a>
				</div><!-- overlay -->
			</div><!-- slider content -->		
			<div class="banner-slider slide1">
				<div class="overlay">
					<h1 class="sec-title">Wel come <span>to our business-craft theme</span></h1>
					<a class="border-btn" href="#">buy this now</a>
				</div><!-- overlay -->
			</div><!-- slider content -->		
		</div><!-- wrapper -->
	</section><!-- section -->

	<div id="content" class="site-content">
