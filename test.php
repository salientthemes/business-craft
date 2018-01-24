<?php
/**
 * The template for displaying home page.
 * @package business-craft
 */
global $business_craft_customizer_all_values;

get_header();
if ( 'posts' == get_option( 'show_on_front' ) )
{
    include( get_home_template() );
}
else
{
if ( ( $business_craft_customizer_all_values['business-craft-feature-slider-enable'] != 1 ) && ($business_craft_customizer_all_values['business-craft-home-feature-enable'] != 1 ) && ($business_craft_customizer_all_values['business-craft-about-us-enable-option'] != 1 ) && ($business_craft_customizer_all_values['business-craft-our-service-enable'] != 1 ) && ($business_craft_customizer_all_values['business-craft-single-button-enable'] != 1 ) && ( $business_craft_customizer_all_values['business-craft-home-testimonial-enable'] != 1 ) && ($business_craft_customizer_all_values['business-craft-home-blog-enable'] != 1 )) {
        if ( current_user_can( 'edit_theme_options' ) ) { ?>
            <section class="wrapper display-info">
                <div class="container">
                <?php echo sprintf(
                    esc_html__( 'All Section are based on page. Enable each Section from customizer for </br> slider: Home/Front Main Slider -> Setting Options -> Enable. likewise to other sections </br> %s', 'business-craft' ),
                    '<a class="button" href="' . esc_url( admin_url( 'customize.php' ) ) . '">' . esc_html__( 'click here', 'business-craft' ) . '</a>'
                    ); ?>
                </div>
            </section>
        <?php }
    }   

}
    else
    {
		/**
		 * business_craft_homepage hook
		 * @since business-craft 1.0.0
		 *
		 * @hooked business_craft_homepage -  10
		 * @sub_hooked business_craft_homepage -  30
         * @hooked busine_Craft_aboutus _page -16
         * @hooked business_craft_our_service -21
		 */
        do_action( 'business_craft_homepage' );

        $business_craft_static_page = absint($business_craft_customizer_all_values['business-craft-enable-static-page']);
        // $business_craft_static_page = 1;
        if ($business_craft_static_page == 1) { ?>
            <div id="content" class="site-content container">
                <div id="primary" class="content-area col-sm-8">
                    <main id="main" class="site-main" role="main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
                <?php
                    get_sidebar();
                ?>
                
            </div>
        <?php }
    }
get_footer();