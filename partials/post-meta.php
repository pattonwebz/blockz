<?php
/**
 * Template part for titles in blockz theme.
 *
 * @package Blockz
 */

?>
<div class="entry-meta">
	<?php
	$blockz_comments_markup = sprintf(
		'<a href="%1$s" title="%2$s">%2$s</a>',
		get_comments_link(),
		get_comments_number_text( __( 'no comments', 'blockz' ), __( 'one comment', 'blockz' ), __( '% comments', 'blockz' ) )
	);
	echo wp_kses_post(
		sprintf(
			/* Translators: 1 - a linked author name, 2 - a formatted timestamp, 3 - a list of linked category names, 4 - the number of comments linked. */
			'<span class="italic text-orange-800">' . __( 'Written by %1$s on %2$s in %3$s with %4$s.', 'blockz' ) . '</span>',
			get_the_author_link(),
			get_the_time( get_option( 'date_format' ) ),
			get_the_category_list( __( ' and ', 'blockz' ) ),
			$blockz_comments_markup
		)
	);
	if ( is_single() ) {
		?>
		<ul class="prev-next-single mt-2 clearfix">
			<li class="previous float-left"><?php previous_post_link( '%link', '&larr; ' . esc_html__( 'Previous Post', 'blockz' ) ); ?></li>
			<li class="next float-right"><?php next_post_link( '%link', esc_html__( 'Next Post', 'blockz' ) . ' &rarr;' ); ?></li>
		</ul>
		<?php
	}
	?>
</div>
