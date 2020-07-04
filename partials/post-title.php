<?php
/**
 * Template part for titles in blockz theme.
 *
 * @package Blockz
 */

if ( is_single() ) {
	?>
	<h1 class="post-title-h1"><?php the_title(); ?></h1>
	<?php
} else {
	?>
	<a href="<?php the_permalink(); ?>">
		<h2 class="post-title-h2"><?php the_title(); ?></h2>
	</a>
	<?php
}
