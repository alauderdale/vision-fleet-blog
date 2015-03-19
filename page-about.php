<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
		
		<div class="extra-padding-page">
			<section id="about1">
				<div class="grid align-center">
					<!--people-->
					<?php $postLoopOne = new WP_Query( array( 'post_type' => 'person') ); ?>
					<?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
	          <div class="unit one-third margin-bottom">
	              <a class="fancybox fancybox.ajax" href="<?php the_permalink(); ?>">
	              <?php the_post_thumbnail( 'full', array( 'class' => 'small-pic' ) ); ?>
	              </a>
	              <h3 class="section-titles-b align-center">
	              	<?php the_title(); ?>
	              </h3>
	              <h4 class="green-titles align-center">
	              	<?php the_field('title');?>
	              </h4>
	          </div>

					<?php endwhile; ?>
				</div>
			</section>
		</div>

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>