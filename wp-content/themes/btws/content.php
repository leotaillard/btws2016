	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<section class="btws-main-content">
		<div class="btws-center">
			<h1 class="btws-the-title"><?php the_title(); ?></h1>
			<div class="btws-the-content"><?php the_content(); ?></div>
		</div> 
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
