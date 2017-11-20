<?php
/**
 * The template for displaying home page.
 * @package business-craft
 */
global $business_craft_customizer_all_values;

get_header();
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
    }

    else{
		/**
		 * business_craft_homepage hook
		 * @since business-craft 1.0.0
		 *
		 * @hooked business_craft_homepage -  10
		 * @sub_hooked business_craft_homepage -  30
		 */
        do_action( 'business_craft_homepage' );

        // $business_craft_static_page = absint($business_craft_customizer_all_values['business-craft-enable-static-page']);
        $business_craft_static_page = 1;
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