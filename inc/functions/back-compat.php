<?php
/**
 * Backwards compat shims and functions for WP.
 *
 * phpcs:disable WordPress.NamingConventions.PrefixAllGlobals
 *
 * @package Blockz
 */

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Shim for new wp_body_open hook to prevent errors on older WP versions.
	 *
	 * @since  0.1.0
	 * @return void
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
