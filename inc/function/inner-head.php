<?php 
global $post;
if (!function_exists('business_craft_single_page_title')) :

	/**
	* edu_light_inner_head_section
	
	* @since edu-light 1.0.0
	*
	* @hooked null
	*/

    function business_craft_single_page_title() {
    		global $edu_light_customizer_all_values;
    		$edu_light_inner_baner_image = esc_url($edu_light_customizer_all_values['business-craft-default-banner-image'] );
    	    ?>
			<div class="wrapper page-inner-title parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url($edu_light_inner_baner_image); ?>">
			
				<div class="overlay-for-img">
	            	<div class = "thumb-overlay">
						<div class="container">
						    <div class="row">
						        <div class="col-md-12 col-sm-12 col-xs-12">
									<header class="entry-header">
										<?php if (is_singular()){ ?>
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										<?php if (! is_page() ){?>
											<header class="entry-header">
												<div class="entry-meta entry-inner">
													<?php business_craft_posted_on(); ?>
												</div><!-- .entry-meta -->
											</header><!-- .entry-header -->
										<?php } }
										elseif (is_404()) { ?>
											<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'edu-light' ); ?></h1>
										<?php }
										elseif (is_archive()) {
											the_archive_title( '<h1 class="entry-title">', '</h1>' );
											the_archive_description( '<div class="taxonomy-description">', '</div>' );
										}
										elseif (is_search()) { ?>
											<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'business_craft' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
										<?php }
										else{ ?>
											<h2 class="entry-title"><?php echo (esc_html__( 'Latest Blog', 'edu-light' )); ?></h2>
									<?php }
										?>
									</header><!-- .entry-header -->
						        </div>
						    </div>
						</div>
					</div>
					<?php 
					/**
					 * edu_light_action_after_title hook
					 * @since business_craft 1.0.0
					 *
					 * @hooked null
					 */
					// do_action( 'edu_light_action_after_title' );
					?>
					</div>
			</div>

		<?php 
	}
endif;
add_action( 'business-craft-page-inner-title', 'business_craft_single_page_title', 15 );