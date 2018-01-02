<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package business_craft
 */
global $business_craft_customizer_all_values;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() )
			{
			}
			else
			{
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php business_craft_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		$business_craft_archive_layout = $business_craft_customizer_all_values['business-craft-archive-layout'];
		$business_craft_archive_image_align = $business_craft_customizer_all_values['business-craft-archive-image-align'];
		if( 'excerpt-only' == $business_craft_archive_layout )
		{
			the_excerpt();
		}
		elseif( 'full-post' == $business_craft_archive_layout )
		{
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'business_craft' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		}
		elseif( 'thumbnail-and-full-post' == $business_craft_archive_layout )
		{
			if( 'left' == $business_craft_archive_image_align )
			{
				echo "<div class='image-left'>";
				the_post_thumbnail('medium');
			}
			elseif( 'right' == $business_craft_archive_image_align )
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
			the_content( sprintf(
			/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'business_craft' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		}
		else
		{
			if( 'left' == $business_craft_archive_image_align )
			{
				echo "<div class='image-left'>";
				the_post_thumbnail('medium');
			}
			elseif( 'right' == $business_craft_archive_image_align )
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
			the_excerpt();
		}
		?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'business_craft' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php business_craft_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
