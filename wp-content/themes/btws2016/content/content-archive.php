		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<section class="btws-main-content container">
			<div class="row">
				<div class="medium-6 columns medium-centered">
					<h1 class="btws-the-title"><?php the_title(); ?></h1>
				</div>
			</div>

			<div class="menu-filtre row">
				<ul class="medium-12 medium-centered columns">
					<li class="filter links" data-filter="all"><span><?php _e('Toutes les catégories','btws'); ?></span></li>
					<?php 
						$categories=  get_categories('exclude=1');
						foreach ($categories as $category) 
							echo '<li class="filter links" data-filter=".'.$category->category_nicename.'"><span>'.$category->cat_name.'</span></li>';
					?>
				</ul>
			</div>

		</section>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php if(is_page(7)){
			$post = 'work';
		} ?>
		<?php if(is_page(30)){
			$post = 'post';
		} ?>


		<?php
			query_posts('posts_per_page=-1&orderby=DESC&post_type='.$post.'');
		?>

			<?php while (have_posts()) : the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );
				$background = $post_thumbnail_url[0];
			?>
			<?php
				$args = array('btws-fixed-background', 'btws-archive', 'container' );
			?>
		       	<section <?php post_class($args); ?> style="background-image:url('<?php echo $background ?>');" >
						<a href="<?php the_permalink(); ?>" class="btws-infos row">
							<div class="medium-8 columns small-centered">
								<h2><?php the_title(); ?></h2>
							</div>
						</a>
		       	</section>
			<?php endwhile; ?>
