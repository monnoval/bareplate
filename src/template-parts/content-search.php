<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bareplate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
	<header class="entry__header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry__meta">
			<?php bareplate_posted_on(); ?>
		</div><!-- .entry__meta -->
		<?php endif; ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php bareplate_entry_footer(); ?>
	</footer><!-- .entry__footer -->
</article><!-- #post-<?php the_ID(); ?> -->
