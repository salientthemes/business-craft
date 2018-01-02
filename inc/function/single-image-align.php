<?php
// image aline single post
if ( ! function_exists('business_craft_single_post_image_align') ):
	
	/**
     * Before wp head codes
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
	function business_craft_single_post_image_align( $post_id = null )
	{
		global $business_craft_customizer_all_values,$post;
		if ( null == $post_id && isset( $post->ID ) )
		{
			$post_id = $post->ID;
		}
		$business_craft_post_image_align  = $business_craft_customizer_all_values['business-craft-single-post-image-align'];
		$business_craft_post_image_align_meta  = get_post_meta( $post_id, 'business-craft-single-post-image-align',true );
		if ( false != $business_craft_post_image_align_meta )
		{
			$business_craft_post_image_align = $business_craft_post_image_align_meta;
		}
		return $business_craft_post_image_align;

	}
endif;

 