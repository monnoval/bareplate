<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package bareplate
 */

get_header(); ?>
<div id="content" class="content site--wrapper">


<div id="primary" class="content__area">
  <main id="main" class="content__main" role="main">

    <section class="error-404 not-found">
      <header class="page-header">
        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'bareplate' ); ?></h1>
      </header><!-- .page-header -->

      <div class="page-content">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bareplate' ); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

        <?php
          /* translators: %1$s: smiley */
          $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'bareplate' ), convert_smilies( ':)' ) ) . '</p>';
          the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
        ?>

        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

      </div><!-- .page-content -->
    </section><!-- .error-404 -->

  </main><!-- #main -->
</div><!-- #primary -->


</div>
<?php get_footer(); ?>
