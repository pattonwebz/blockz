<?php
/**
 * The fcomments.php template for Blockz theme.
 *
 * @package Blockz
 */

?>

<div id="comments">
	<?php
	if ( post_password_required() ) {
		/*
		 * Output a password protected message, close the div and return early.
		 */
		?>
		<p class="nopassword text-xl2 "><?php esc_html_e( 'This post is password protected.', 'blockz' ); ?><br/><?php esc_html_e( 'Please enter the password to view any comments.', 'blockz' ); ?></p>
	</div><!-- #comments -->
	<hr class="hr-row-divider">
	<?php
	return;
	}

	if ( have_comments() ) {
		?>
		<h3 id="comments-title">
			<?php
				printf(
					esc_html(
						// translators: 1 is a total number of comments.
						_n( '%1$s Response to &ldquo;%2$s&rdquo;', '%1$s Responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'blockz' )
					),
					absint( number_format_i18n( get_comments_number() ) ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="clearfix">
			<h3 class="sr-only"><?php esc_html_e( 'comment navigation', 'blockz' ); ?></h3>
			<div class="nav-previous float-left"><?php previous_comments_link( '<i class="fa fa-arrow-left"></i> ' . esc_html__( 'older comments', 'blockz' ) ); ?></div>
			<div class="nav-next float-right"><?php next_comments_link( esc_html__( 'newer comments', 'blockz' ) . ' <i class="fa fa-arrow-right"></i>' ); ?></div>
		</nav>
		<?php } // Check for comment navigation. ?>

		<ol class="commentlist">
			<?php

				/*
				 * Loop through and list the comments. Tell wp_list_comments()
				 * to use best_reloaded_respond_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define best_reloaded_respond_comment() and that will be used instead.
				 * See best_reloaded_respond_comment() in comments-and-pingpacks.php for more.
				 */
				wp_list_comments();
			?>
		</ol>

		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // Are there comments to navigate through?
			?>
			<nav id="comment-nav-below" class="clearfix">
				<h3 class="sr-only"><?php esc_html_e( 'comment navigation', 'blockz' ); ?></h3>
				<div class="nav-previous pull-left"><?php previous_comments_link( '<i class="fa fa-arrow-left" aria-hidden="true"></i> ' . esc_html__( 'older comments', 'blockz' ) ); ?></div>
				<div class="nav-next pull-right"><?php next_comments_link( esc_html__( 'newer comments', 'blockz' ) . ' <i class="fa fa-arrow-right" aria-hidden="true"></i>' ); ?></div>
			</nav>
			<?php
		}

		/*
		 * If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
	} elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) {
		?>
		<p class="nocomments hero-p"><?php esc_html_e( 'Comments are closed.', 'blockz' ); ?></p>
		<?php
	}
	?>
	<div class="comment-fields">
		<?php
		comment_form();
		?>
	</div>
</div>
