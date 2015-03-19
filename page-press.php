<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'page_header' ); ?>

		<div class="extra-padding-page">
			<section>
				<div class="grid">
					<div class="unit one-quarter">&nbsp;</div>
					<div class="unit half">
						<?php $postLoopOne = new WP_Query( array( 'post_type' => 'press') ); ?>
						<?php while ( $postLoopOne->have_posts() ) : $postLoopOne->the_post(); ?>
							<h4 class="green-titles align-left">
								<a href="<?php the_field('press_link'); ?>" target="_blank">
									<?php the_title(); ?>
								</a>
							</h4>
							<p class="body-copy-b align-left">
								<?php the_date(); ?>
							</p>
							<br/><br/>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="unit one-quarter">&nbsp;</div>
				</div>
			</section>
		</div>


	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>