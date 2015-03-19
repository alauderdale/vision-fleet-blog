<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>
		
		<div class="extra-padding-page">
			<!--press-->
			<?php $postLoopOne = new WP_Query( array( 'post_type' => 'case_study') ); ?>
						<?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
				<section>
					<div class="grid">
						<div class="unit one-third">
							<?php the_post_thumbnail( 'full', array( 'class' => 'left-right-padding project-images' ) ); ?>
						</div>
						<div class="unit two-thirds">
						<h3 class="section-titles-b jobs-padding">
							Case Study: 
							<?php the_title(); ?>
						</h3>
						<div class="body-copy-b jobs-padding">
							<?php the_content(); ?>
						</div>
						</div>

					</div>
				</section>
			<?php endwhile; ?>
		</div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>