<?php
/**
 * Template part for titles in blockz theme.
 *
 * @package Blockz
 */

$blockz_attachment_id = get_post_thumbnail_id( get_the_ID() );
$blockz_attachment    = ( ! empty( $blockz_attachment_id ) ) ? wp_get_attachment_image_src( $blockz_attachment_id, 'blockz_featured_image' ) : '';

if ( ! is_array( $blockz_attachment ) ) {
	return;
}

$blockz_image_markup   = get_the_post_thumbnail( get_the_ID(), 'full' );
$blockz_image_wrapper_classes = '';

if ( $blockz_attachment[1] > 1200 && is_single() ) {
	$blockz_image_wrapper_classes = 'alignfull';
} elseif ( $blockz_attachment[1] > 800 ) {
	$blockz_image_wrapper_classes = 'alignwide';
}

if ( ! $blockz_image_markup || ! $blockz_image_wrapper_classes ) {
	return;
}

?>
<div class="post-image <?php echo esc_attr( $blockz_image_wrapper_classes ); ?>">
	<?php echo $blockz_image_markup; ?>
</div>
<?php
