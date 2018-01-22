<?php
if ( !function_exists('business_craft_excerpt_length') ) :
	 /**
     * Excerpt length
     *
     * @since  business_Craft 0.0.1
     *
     * @param null
     * @return int
     */
	 function business_craft_excerpt_length( $length )
	 {
	 	global $business_craft_customizer_all_values;
	 	$excerpt_length = $business_craft_customizer_all_values['business-craft-number-of-words'];
	 	if ( empty($excerpt_length) )
	 	{
	 		$excerpt_length = $length;
	 	}
	 	return $excerpt_length;
	 }
endif;
add_filter( 'excerpt_length', 'business_craft_excerpt_length', 999 );