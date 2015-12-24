	<?php if (have_posts()) : ?>

		<?php if(is_page(7)){
			$post = 'work';
		} ?>
		<?php if(is_page(30)){
			$post = 'post';
		} ?>
		<?php
			query_posts('posts_per_page=-1&orderby=DESC&post_type='.$post.'');
		?>
		<section class="btws-archive btws-main-content <?php echo $post; ?>">
			<ul>
			<?php while (have_posts()) : the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id,'archive-thumbnails');
			?>		

				<li>
					<a href="<?php the_permalink(); ?>" class="btws-the-title"><?php the_title(); ?></a>
				</li>
			<?php endwhile; ?>
			
			</ul>
		</section>
	<?php endif; ?>

