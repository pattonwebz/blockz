<?php
/**
 * Setup functions for the Blockz theme.
 *
 * @package Blockz
 */

namespace PattonWebz\Blockz\Core;

use PattonWebz\Blockz;

/**
 * Kickstarts the theme setup.
 *
 * @since 0.1.0
 * @return void
 */
function setup() {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );

	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 900;
	}

	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_styles' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );
}

/**
 * Setup the theme and register it's supported items.
 *
 * @since 0.1.0
 * @return void
 */
function theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );

	add_editor_style( 'style.css' );

	// Adds align-full and align-wide support in the editor.
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	add_action( 'init', __NAMESPACE__ . '\register_menus' );
	add_action( 'widgets_init', __NAMESPACE__ . '\register_sidebars' );
}

/**
 * Enqueue the styles for the theme.
 *
 * @since 0.1.0
 * @return void
 */
function enqueue_styles() {
	wp_enqueue_style( 'blockz-style', BLOCKZ_TEMPLATE_URL . '/style.css', [], BLOCKZ_VERSION );
}

/**
 * Enqueue the scripts for the theme.
 *
 * @since 0.1.0
 * @return void
 */
function enqueue_scripts() {
	wp_enqueue_script( 'blockz-script', BLOCKZ_TEMPLATE_URL . '/script.js', [], BLOCKZ_VERSION, true );
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * Register the menus that the theme uses.
 *
 * @since 0.1.0
 * @return void
 */
function register_menus() {
	register_nav_menus(
		[
			'primary-menu' => __( 'The primary menu for the theme.', 'blockz' ),
			'footer-manu'  => __( 'The footer links menu.', 'blockz' ),
		]
	);
}

/**
 * Register the sidebars that the theme uses.
 *
 * @since 0.1.0
 * @return void
 */
function register_sidebars() {
	register_sidebar(
		[
			'name'          => __( 'Footer', 'blockz' ),
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => "</div>\n",
			'before_title'  => '<h2 class="widgettitle text-xl2">',
			'after_title'   => "</h2>\n",
		]
	);
}
