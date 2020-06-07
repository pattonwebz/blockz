<?php
/**
 * The footer.php template for Blockz theme.
 *
 * @package Blockz
 */

?>
		</main>
		<footer class="site-footer bg-teal-500 text-teal-100 mt-4 pt-6 pb-2">
			<?php
			if ( is_active_sidebar( 'footer' ) ) {
				?>
				<div class="container grid grid-cols-1 md:grid-cols-3 mb-5">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
				<?php
			}
			?>
			<div class="copyrights container">
				<small>
					<?php
					echo wp_kses_post(
						sprintf(
							/* Translators: site name */
							__( 'Copyright %1$d &copy; %2$s', 'blockz' ),
							date( 'Y' ),
							get_bloginfo( 'name' )
						)
					);
					?>
				</small>
			</div>
		</footer>
		<?php
		wp_footer();
		?>
	</body>
</html>
