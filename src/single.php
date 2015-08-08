<?php
/**
 * The template for displaying all single posts.
 *
 * @package bareplate
 */

get_header(); ?>
<div id="content" class="content site--wrapper">


<div id="primary" class="content__area">
  <main id="main" class="content__main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
  <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->


</div>
<?php get_footer(); ?>
