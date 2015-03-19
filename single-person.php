<h5 class="about-names">
	<?php the_title(); ?>
</h5>
<div class="body-copy-b">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>

