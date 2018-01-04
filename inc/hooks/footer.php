<?php
if (!function_exists('business_craft_before_footer') ) :
	/**
     * Footer content
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return false | void
     *
     */
	function business_craft_before_footer()
	{
		if ( !is_front_page() && !is_home() ) { ?>
		</div><!-- #content -->
		<?php } ?>
		<!-- footer section start -->
		<footer id="colophon" class="site-footer">
	<?php }
 endif;
 add_action('business_craft_action_before_footer','business_craft_before_footer');

if ( !function_exists( 'business_craft_widget_before_footer' ) ) :
	 /**
     * Footer content
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return false | void
     *
     */
    function business_craft_widget_before_footer()
    {
    	global $business_craft_customizer_all_values;

    	$business_craft_footer_widgets_number = absint($business_craft_customizer_all_values['business-craft-select-number-footer']);
    	if ( $business_craft_footer_widgets_number <= 0 ) 
    	{
    		return false;
    	}
    	if (!is_active_sidebar('full-width-footer') && !is_active_sidebar('footer-sidebar-1')  && !is_active_sidebar('footer-sidebar-2')  && !is_active_sidebar('footer-sidebar-3') )
    	{
    		return false;
    	}
    	if (1 == $business_craft_footer_widgets_number)
    	{
    		$col = 'col-md-12';
    	}
    	elseif( 2 == $business_craft_footer_widgets_number )
    	{
            $col = 'col-md-6';
        }
        elseif( 3 == $business_craft_footer_widgets_number )
        {
            $col = 'col-md-4';
        }
        else
        {
            $col = 'col-md-4';
        }
        ?>
        <!-- *****************************************
             Footer before section
        ****************************************** -->
        <!-- full width footer -->
        <section class="wrapper block-section wrap-contact footer-widget full-width">
            <div class="container full-width-footer">
                <div class="row">
                    <div id="full-width-footer">
                    <?php
                    if(is_active_sidebar('full-width-footer')){
                    dynamic_sidebar('full-width-footer');
                    }
                    ?>
                </div>
            </div>
        </section><!-- full width widget ended -->

        <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php if( is_active_sidebar( 'footer-sidebar-1' ) && $business_craft_footer_widgets_number > 0 ) : ?>
                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( is_active_sidebar( 'footer-sidebar-2' ) && $business_craft_footer_widgets_number > 1 ) : ?>
                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( is_active_sidebar( 'footer-sidebar-3' ) && $business_craft_footer_widgets_number > 2 ) : ?>
                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
            </div>   
         </div>  
    <?php
}
endif;
add_action( 'business_craft_action_widget_before_footer', 'business_craft_widget_before_footer', 10 );

// for enable footer option 
if ( !function_exists( 'business_craft_footer_theme_text' ) ) : 
    /**
     * Footer content
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return null
     *
     */
    function business_craft_footer_theme_text()
    {
        global $business_craft_customizer_all_values;
        ?>
            <div class="full-width">
                <div class="site-info col-md-12">
                <!-- footer site info -->
                    <!-- <div class="copy-right text-center"> -->
                        <?php
                        if(isset($business_craft_customizer_all_values['business-craft-copy-right-text'])){
                            echo wp_kses_post( $business_craft_customizer_all_values['business-craft-copy-right-text'] );
                        }
                        ?>
                        <?php
                         if( 1 == $business_craft_customizer_all_values['business-craft-enable-theme-option']){
                            ?>
                        <span class="sep"> | </span>
                        <?php printf( esc_html__( 'Theme: %1$s by %2$s', 'business-craft' ), 'business-craft', '<a href="http://salientthemes.com/" target = "_blank" rel="designer">salientthemes </a>' ); ?>
                        <?php
                        }
                        ?>
                    <!-- </div> -->
                </div><!-- .social-links-n-copy-right -->
            </div><!-- .col-md-12 -->

    <?php }
endif;
add_action( 'business_craft_action_footer', 'business_craft_footer_theme_text', 10 );

// go to top 
if ( ! function_exists('business_craft_back_to_top')  ) :

    /**
     * Footer content
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return null
     *
     */
    function business_craft_back_to_top()
    {
        global $business_craft_customizer_all_values;
        ?>
        <?php 
        if (isset($business_craft_customizer_all_values['business-craft-enable-back-to-top']) &&  1 == 
            $business_craft_customizer_all_values['business-craft-enable-back-to-top']);
        {
            ?>
        <div class="scroll-to-top" id="gotop"><i class="fa fa-angle-up"></i></div>
        </div><!-- #page -->
    <?php }
        }
        
endif;
add_action('business_craft_action_after','business_craft_back_to_top',10);
