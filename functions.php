<?php
/**
 * Blockz WordPress Theme.
 *
 * @package Blockz
 */

namespace PattonWebz\Blockz;

use PattonWebz\Blockz;

define( 'BLOCKZ_VERSION', '0.1.0' );
define( 'BLOCKZ_TEMPLATE_URL', get_template_directory_uri() );
define( 'BLOCKZ_PATH', get_template_directory() . '/' );
define( 'BLOCKZ_INC', BLOCKZ_PATH . 'inc/' );

// Require Composer autoloader if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}

// Require the base function files for the theme.
require_once BLOCKZ_INC . 'functions/core.php';
require_once BLOCKZ_INC . 'functions/back-compat.php';

if ( ! isset( $content_width ) ) {
	$content_width = 1280;
}

// Run the setup functions.
Blockz\Core\setup();
