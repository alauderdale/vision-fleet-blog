<?php
/*
Template Name: Jobs
*/
?>

<?php get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
		
		<div class="extra-padding-page">

			<section>
				<div class="grid align-center">
					<?php $postLoopOne = new WP_Query( array( 'post_type' => 'job') ); ?>
						<?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
						<div class="unit one-third">
							<h3 class="section-titles-b align-left jobs-padding">
								<?php the_title(); ?>
							</h3>
							<div class="body-copy-b align-left jobs-padding">
							￼<?php the_excerpt(); ?>
							</div>
							<a class="main-links align-left jobs-padding" href="<?php the_permalink(); ?>">Click here for more details</a>
						</div>
					<?php endwhile; ?>
				</div>
			</section>
		    
		</div>

	<?php endwhile; // end of the loop. ?>







<?php get_footer(); ?>