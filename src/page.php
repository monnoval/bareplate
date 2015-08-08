<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bareplate
 */

get_header(); ?>
<div id="content" class="content">


  <div class="site__main" role="main">
  <div class="site--wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'page' ); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
  </div>


</div>
<?php get_footer(); ?>
