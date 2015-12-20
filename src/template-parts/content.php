<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bareplate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
	<header class="entry__header">
		<?php
			if ( is_single() ) {
				the_title( '<h2 class="entry__title">', '</h2>' );
			} else {
				the_title( '<h2 class="entry__title"><a class="entry__title__a" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry__meta">
			<?php bareplate_posted_on(); ?>
		</div><!-- .entry__meta -->
		<?php
		endif; ?>
	</header><!-- .entry__header -->

	<div class="entry__content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bareplate' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bareplate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry__footer">
		<?php bareplate_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
