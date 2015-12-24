		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
<!-- 		<section class="btws-main-content">
			<h1 class="btws-the-title"><span><?php the_title(); ?></span></h1>
		</section>
 -->	<?php endwhile; ?>
	<?php endif; ?>
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

		<section id="isotope-container" class="cf btws-archive btws-main-content <?php echo $post; ?>">
			<?php while (have_posts()) : the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
			?>		

			<article id="post-<?php the_ID(); ?>" <?php post_class('isotope-item'); ?>>

			<figure>
					<?php
					$image_thumb = get_field('autre_image');
					if( !empty($image_thumb) ): ?>
						<img src="<?php echo $image_thumb['url']; ?>" alt="<?php the_title(); ?>">
					<?php 
						else:
					?>
					<?php if ($post_thumbnail_url) { ?><img src="<?php echo $post_thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"><?php } ?>
					<?php 
						endif;
					?>

				<a href="<?php the_permalink(); ?>"><figcaption><h2><?php the_title(); ?></h2><?php the_excerpt(); ?></figcaption></a>
			</figure>
			</article>

			<?php endwhile; ?>
			
		</section>
	<?php endif; ?>
