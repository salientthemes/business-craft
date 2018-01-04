<?php
if ( ! function_exists( 'business_craft_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since business_craft 0.0.1
 */
function business_craft_the_custom_logo()
{
    if ( function_exists( 'the_custom_logo' ) )
    {
        the_custom_logo();
    }
}
endif;