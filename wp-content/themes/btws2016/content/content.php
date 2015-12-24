	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<section class="btws-main-content container">
		<div class="row">
			<div class="medium-6 columns medium-centered">
				<h1 class="btws-the-title"><?php the_title(); ?></h1>
				<div class="btws-the-content"><?php the_content(); ?></div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
