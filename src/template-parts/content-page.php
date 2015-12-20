<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bareplate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
	<header class="entry__header">
		<?php the_title( '<h2 class="entry__title">', '</h2>' ); ?>
	</header><!-- .entry__header -->

	<div class="entry__content">
		<?php the_content(); ?>
	</div><!-- .entry__content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'bareplate' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry__footer -->
</article><!-- #post-<?php the_ID(); ?> -->
