<?php

if ( ! function_exists('customizer_link') ) : 
  /**
    * customizer link 
    *
    * @since business-craft 1.0.0
    *
    * @param null
    * @return null
    */

	function customizer_link()
	{
		global $business_craft_customizer_all_values;
		

		 if ( 1 != $business_craft_customizer_all_values['business-craft-feature-slider-enable'] && 1 != $business_craft_customizer_all_values['business-craft-home-feature-enable'] && 1 != $business_craft_customizer_all_values['business-craft-about-us-enable-option'] && 1 != $business_craft_customizer_all_values['business-craft-our-service-enable'] && 1 != $business_craft_customizer_all_values['business-craft-single-button-enable'] && 1 != $business_craft_customizer_all_values['business-craft-home-testimonial-enable'] && 1 != $business_craft_customizer_all_values['business-craft-home-blog-enable'] ) {
		 	
        if ( current_user_can( 'edit_theme_options' ) ) { ?>
            <section class="wrapper display-info">
                <div class="container">

                   <?php
                   
                    printf(esc_html__('All Section are based on page. Enable each Section from customizer for %1$s slider: Home page->slider->Enable feature slider. likewise to other sections %2$s %3$s click here %4$s ','business-craft'), '<br />','<br />','<a class="button" href="' . esc_url( admin_url( 'customize.php' ) ) . '">', '</a>');
                    ?>

                   
                </div>
            </section>
             <?php }  
	}
}

endif ;
add_action('business_craft_customizer_link','customizer_link',10);