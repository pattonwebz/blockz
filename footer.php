<?php
/**
 * The footer.php template for Blockz theme.
 *
 * @package Blockz
 */

?>
		</main>
		<footer id="site-footer">
			<?php
			if ( is_active_sidebar( 'footer' ) ) {
				?>
				<div class="container mb-5">
					<div id="footer-sidebar">
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
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
							date_i18n( _x( 'Y', 'copyright date format', 'blockz' ) ),
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
