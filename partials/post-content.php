<?php
/**
 * Template part for titles in blockz theme.
 *
 * @package Blockz
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
	<?php
	if ( is_archive() ) {
		the_excerpt();
	} else {
		the_content();
	}
	wp_link_pages(
		array(
			'before' => '<p class="wp-link-pages text-xl">' . esc_html__( 'Continue Reading: ', 'blockz' ),
			'after'  => '</p>',
		)
	);
	?>
	<div class="post_tags clearfix">
		<?php the_tags( '<span class="meta italic">' . esc_html__( 'Tags: ', 'blockz' ) . '</span> ', ' ' ); ?>
	</div>
	<?php
	if ( is_single() ) {
		?>
		<div class="comments border-t mt-3 pt-2 pb-2">
			<?php comments_template(); ?>
		</div>
		<?php
	}
	?>
</div>
