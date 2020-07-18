<?php
/**
 * The header.php template for Blockz theme.
 *
 * @package Blockz
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php
		wp_body_open();
		?>
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'blockz' ); ?>
		</a>
	<header>
		<nav id="header-nav" aria-label="<?php esc_attr_e( 'Primary', 'blockz' ); ?>">
			<?php
			$blockz_header_el    = ( is_single() ) ? 'span' : 'h1';
			$blockz_is_main_page = ( is_home() || is_front_page() );
			printf(
				'<%1$s id="site-title">%3$s%2$s%4$s</%1$s>',
				$blockz_header_el, // phpcs:ignore -- this is static text
				esc_html( get_bloginfo( 'name' ) ),
				( ! $blockz_is_main_page ) ? '<a href="' . esc_url( get_home_url() ) . '">' : '',
				( ! $blockz_is_main_page ) ? '</a>' : '' // phpcs:ignore -- static string
			)
			?>
			<div id="header-nav-toggle">
				<button id="nav-toggle" title="<?php esc_attr_e( 'open navigation links', 'blockz' ); ?>">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title><?php esc_html_e( 'Menu', 'blockz' ); ?></title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
				</button>
			</div>
			<?php
			if ( has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'container'      => 'div',
						'container_id'   => 'header-nav-items',
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						'walker'         => new \PattonWebz\Blockz\Walker\BlockzNavWalker(),
					)
				);
			}
			?>
		</nav>
	</header>
	<main id="content" class="container">
