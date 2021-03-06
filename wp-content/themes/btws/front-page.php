<?php include('header.php') ?>

		


		<?php if (have_posts()) : ?>
		<?php query_posts('posts_per_page=1&orderby=DESC&post_type=post'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php
			$post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			$couleurText = get_field('couleur_du_texte');

		?>
			<section id="gazette" class="btws-item frontpage btws-fixed-background <?php echo $couleurText; ?>" style="background-image:url('<?php echo $post_thumbnail_url; ?>');">
				<div class="btws-the-date"><?php the_date(); ?></div>
				<div class="btws-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<div class="btws-the-author">Textes et images : <?php echo(get_the_author()); ?></div>
					<ul>
						<li><a href="<?php the_permalink(); ?>" class="see-more"><span>+</span></a></li>
					</ul>
					
				</div>

			</section>
		<?php //terminer la boucle ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	

	<section class="btws-frontpage-menu cf">
			<h1>Tables des matières</h1>


		<section id="other-gazette" class="btws-frontpage-menu-item">
			<h1>Gazette</h1>
			<?php if (have_posts()) : ?>
			<?php query_posts('posts_per_page=-3&orderby=DESC&post_type=post'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
			?>
			<article>
					<?php
					$image_thumb = get_field('autre_image');
					if( !empty($image_thumb) ): ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_thumb['url']; ?>" alt="<?php the_title(); ?>"></a>
					<?php 
						else:
					?>
					<?php if ($post_thumbnail_url) { ?><a href="<?php the_permalink(); ?>"><img src="<?php echo $post_thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a><?php } ?>
					<?php 
						endif;
					?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<div class="btws-the-author">Textes et images : <?php echo(get_the_author()); ?></div>
					<ul>
						<li><a href="<?php the_permalink(); ?>"class="see-more"><span>+</span></a></li>
					</ul>
			</article>
			<?php //terminer la boucle ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<h1><a href="<?php echo get_page_link(30); ?>">Kiosk</a></h1>
		</section>


		<section id="other-work" class="btws-frontpage-menu-item">
			<h1>Réalisations</h1>
			<?php if (have_posts()) : ?>
				<?php query_posts('posts_per_page=-3&orderby=DESC&post_type=work'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php
					$post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
				?>
					<article>
						<?php
						$image_thumb = get_field('autre_image');
						if( !empty($image_thumb) ): ?>
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_thumb['url']; ?>" alt="<?php the_title(); ?>"></a>
						<?php 
							else:
						?>
						<?php if ($post_thumbnail_url) { ?><a href="<?php the_permalink(); ?>"><img src="<?php echo $post_thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a><?php } ?>
						<?php 
							endif;
						?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<div class="btws-the-date">
							<?php 
								$date = get_field('date_du_travail');
								$y = substr($date, 0, 4);
								$m = substr($date, 4, 2);
								$d = substr($date, 6, 2);
								$time = strtotime("{$d}-{$m}-{$y}");
								if( !empty($date) ): ?>
									<?php echo date('m/Y', $time); ?>	
							<?php endif; ?>
						</div>
						<ul>
							<li><a href="<?php the_permalink(); ?>" class="see-more"><span>+</span></a></li>
						</ul>
					</article>
				<?php //terminer la boucle ?>
				<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<h1><a href="<?php echo get_page_link(7); ?>">Références</a></h1>
		</section>
		<section id="studio" class="btws-frontpage-menu-item">
			<h1>Informations</h1>
		<!-- By the way page -->
		<?php if (have_posts()) : ?>
			<?php
				$args = array(
					'post_type' => 'page',
					'orderby'=> 'DESC',
					'post__in' => array(300,9,241),
					'posts_per_page' => 3,
				);
			query_posts($args); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
			?>
					<article>
							<?php
							$image_thumb = get_field('autre_image');
							if( !empty($image_thumb) ): ?>
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_thumb['url']; ?>" alt="<?php the_title(); ?>"></a>
							<?php 
								else:
							?>
							<?php if ($post_thumbnail_url) { ?><a href="<?php the_permalink(); ?>"><img src="<?php echo $post_thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a><?php } ?>
							<?php 
								endif;
							?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<ul>
								<li><a href="<?php the_permalink(); ?>" class="see-more"><span>+</span></a></li>
							</ul>
					</article>

			<?php //terminer la boucle ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
			<h1><a href="#">Voilà</a></h1>
		</section>
	</section>
	<?php include('footer.php') ?>