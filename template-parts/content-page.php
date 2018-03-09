<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package business_craft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		global $business_craft_customizer_all_values;
		$business_craft_single_post_image_align = business_craft_single_post_image_align(get_the_ID());
		
		if( 'no-image' != $business_craft_single_post_image_align )
		{
			if( 'left' == $business_craft_single_post_image_align )
			{
				echo "<div class='image-left'>";
				the_post_thumbnail('medium');
			}
			elseif( 'right' == $business_craft_single_post_image_align )
			{
				echo "<div class='image-right'>";
				the_post_thumbnail('medium');
			}
			else
			{
				echo "<div class='image-full'>";
				the_post_thumbnail('full');
			}
			echo "</div>";/*div end*/
		}
		?>
		<?php
			if( is_page() ){
				the_content();				
			} else {
				the_excerpt();				
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'business-craft' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'business-craft' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
