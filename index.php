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
paginate_links();
get_footer();
