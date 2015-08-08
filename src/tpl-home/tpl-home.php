<?php
/*
Template Name: Homepage
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
