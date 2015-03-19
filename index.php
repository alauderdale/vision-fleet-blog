<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>

	<div class="content wrapper main-wrapper">
  <!--hero part-->
  <div class="page_hero blog_hero">
    <div class="extra-padding-inner">
      <div class="grid">
        <div class="unit whole">
          <h1 class="main" style="text-transform:uppercase;">
            Blog
          </h1>
        </div>      
      </div> 
  </div>    
</div>



	<?php while ( have_posts() ) : the_post(); ?>



	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>