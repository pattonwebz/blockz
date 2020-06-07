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
		<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
			<div class="flex items-center flex-shrink-0 text-white mr-6">
				<?php
				$blockz_header_el = ( is_single() ) ? 'span' : 'h1';
				?>
				<<?php echo esc_attr( $blockz_header_el ); ?> class="font-semibold text-xl tracking-tight"><?php bloginfo( 'name' ); ?></<?php echo esc_attr( $blockz_header_el ); ?>>
			</div>
		<div class="block md:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title><?php esc_html__( 'Menu', 'blockz' ); ?></title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>
		<?php
		if ( has_nav_menu( 'primary-menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'primary-menu',
					'container'       => 'div',
					'container_id'    => 'nav-items',
					'container_class' => 'w-full md:block hidden flex-grow lg:flex lg:items-center lg:w-auto',
					'items_wrap'      => '%3$s',
					// 'depth'           => 1,
					'walker'          => new \PattonWebz\Blockz\Walker\TailwindNavWalker(),
				)
			);
		}
		?>
	</header>
	<main id="content" class="container mb-12">
