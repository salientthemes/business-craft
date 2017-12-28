<?php

if (! function_exists('business_craft_single_button') ) :
  /**
    * About us array creation
    *
    * @since Busniess_Craft 1.0.0
    *
    * @param null
    * @return null
    */
  	function business_craft_single_button()
  	{
  		global $business_craft_customizer_all_values;

  		$business_craft_single_button_text = esc_html($business_craft_customizer_all_values['business-craft-single-button-text']);
  		$business_craft_single_button_link = esc_url($business_craft_customizer_all_values['business-craft-single-button-link']);
  		if ( 1 !=  $business_craft_customizer_all_values['business-craft-single-button-enable'] )
  		{
  			return null;
  		}
  		?>
  		 <section class="call-to-action" id="call-to-action"><!-- call to action section -->
                <div class="image-overlay">
                    <a href="<?php echo esc_url($business_craft_single_button_link );?>" class="call-to-action-btn"><?php echo esc_html($business_craft_single_button_text);?></a>
                </div>
           </section><!-- call to action section -->
  	<?php }

endif;
add_action('business_craft_homepage','business_craft_single_button' ,20);