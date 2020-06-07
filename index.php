<?php
/**
 * The main index.php template for the Blockz theme.
 *
 * @package Blockz
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content' );
	}
}

if ( is_archive() ) {
	?>
	<div class="paginate_links paginate-ending border-t border-b pt-4 pb-4 mb-2">
		<?php
		paginate_links();
		?>
	</div>
	<?php
} else {
	?>
	<div class="post_nav_link paginate-ending border-t border-b pt-4 pb-4 mb-2">
		<?php
		posts_nav_link();
		?>
	</div>
	<?php
}

get_footer();
