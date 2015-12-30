		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<section class="btws-main-content container">
			<div class="row">
				<div class="medium-6 columns medium-centered">
					<h1 class="btws-the-title"><?php the_title(); ?></h1>
				</div>
			</div>

		<?php // tags pour les articles
		if(is_page(30)){ ?>
			<div class="menu-filtre row">
				<ul class="medium-12 medium-centered columns">
					<li class="filter links" data-filter="all"><span><?php _e('Tout','btws'); ?></span></li>
					<?php 
						$tags=  get_tags('exclude=1');
						foreach ($tags as $tag) 
							echo '<li class="filter links" data-filter=".'.$tag->slug.'"><span>'.$tag->name.'</span></li>';
					?>
				</ul>
			</div>
		<?php } ?>
		<?php // tags pour les travaux
		if(is_page(7)){ ?>
			<div class="menu-filtre row">
				<ul class="medium-12 medium-centered columns">
					<li class="filter links" data-filter="all"><span><?php _e('Tout','btws'); ?></span></li>
					<?php 
						$tags=  get_terms('category_works', array('hide_empty' => false));
						foreach ($tags as $tag) 
							echo '<li class="filter links" data-filter=".'.$tag->slug.'"><span>'.$tag->name.'</span></li>';
					?>
				</ul>
			</div>
		<?php } ?>

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
