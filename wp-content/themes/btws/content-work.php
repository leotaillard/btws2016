	<?php if (have_posts()) : ?>

		<?php if(!is_singular('work')){
			query_posts('posts_per_page=1&orderby=DESC&post_type=work'); 
		} ?>
		<?php while (have_posts()) : the_post(); ?>
	<section class="btws-main-content">
		<h1 class="btws-the-title"><?php the_title(); ?></h1>
		<div class="btws-center">
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
			<div class="btws-the-content"><?php the_content(); ?></div>
		</div> 
	</section>
		<!-- Section 1 -->
		<?php 
			$image_section_1 = get_field('image_1');
			if( !empty($image_section_1) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_1['url']; ?>');" ></section>
		<?php endif; ?>
		<?php 
			$image_section_2 = get_field('image_2');
			if( !empty($image_section_2) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_2['url']; ?>');" ></section>
		<?php endif; ?>
		<?php 
			$image_section_3 = get_field('image_3');
			if( !empty($image_section_3) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_3['url']; ?>');" ></section>
		<?php endif; ?>
		<?php 
			$headline = get_field('headline');

			if( !empty($headline) ): ?>
				<section class="btws-fixed-background">
					<div class="btws-content headline">
						<?php echo $headline; ?>
					</div>
				</section>
		<?php endif; ?>
		<?php 
			$image_section_4 = get_field('image_4');
			if( !empty($image_section_4) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_4['url']; ?>');" ></section>
		<?php endif; ?>
		<?php 
			$image_section_5 = get_field('image_5');
			if( !empty($image_section_5) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_5['url']; ?>');" ></section>
		<?php endif; ?>
		<?php 
			$image_section_6 = get_field('image_6');
			if( !empty($image_section_6) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_6['url']; ?>');" ></section>
		<?php endif; ?>

		<?php 
			$image_section_7 = get_field('7');
			if( !empty($image_section_7) ): ?>
				<section class="btws-fixed-background" style="background-image:url('<?php echo $image_section_7['url']; ?>');" ></section>
		<?php endif; ?>


	<?php //terminer la boucle ?>
	<?php endwhile; ?>
	<?php endif; ?>
		<section class="btws-nav works <?php $next_post = get_next_post(); if ( !is_a( $next_post , 'WP_Post' ) ) { echo "no_next"; }?><?php $prev_post = get_previous_post(); if (empty( $prev_post )): ?> no_prev<?php endif; ?> cf">
		<ul>
		<?php $prev_post = get_previous_post();
			if (!empty( $prev_post )): ?>
				<li>
					<a href="<?php echo get_permalink( $prev_post->ID ); ?>">Réalisations précédente<!--  : <?php echo $prev_post->post_title; ?> --></a>
				</li>
			<?php endif; ?>
			<?php $next_post = get_next_post();
			if ( is_a( $next_post , 'WP_Post' ) ) { ?>
			<li>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">Réalisations suivante<!--  : <?php echo get_the_title( $next_post->ID ); ?> --></a>
			</li>
			
			<?php } ?>
			<li id="archive">
				<a href="<?php echo get_permalink(7); ?>">Archives</a>
			</li>

		</ul>
	</section>
</section>