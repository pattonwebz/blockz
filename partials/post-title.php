<?php
/**
 * Template part for titles in blockz theme.
 *
 * @package Blockz
 */

if ( is_single() ) {
	?>
	<h1 class="text-6xl text-center mt-6 mb-12"><?php the_title(); ?></h1>
	<?php
} else {
	?>
	<a href="<?php the_permalink(); ?>">
		<h2 class="text-4xl text-center mt-6 mb-8"><?php the_title(); ?></h2>
	</a>
	<?php
}
