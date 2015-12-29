	<?php if (have_posts()) : ?>

		<?php if(!is_singular('work')){
			query_posts('posts_per_page=1&orderby=DESC&post_type=work'); 
		} ?>
		<?php while (have_posts()) : the_post(); ?>
	<section class="btws-main-content container">
		<div class="row">
			<div class="medium-8 columns medium-centered">
				<h1 class="btws-the-title"><?php the_title(); ?></h1>
				<div class="btws-the-infos">
						<?php 
						$name = get_field('nom_du_client');
						$link = get_field('site_internet_du_client');

						if( !empty($name) ): ?>
						<p>Client : <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?></a></p>
						<?php endif; ?>
				</div>
				<div class="btws-the-content"><?php the_content(); ?></div>
				<div class="btws-the-visit">
					<svg version="1.1" id="guided-tour" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
<g>
	<path d="M22.7,13.5c-1.5-0.8-3-2.4-4.5-4.1c-2.6-3-5.5-6.3-10.1-6.7c0.2-0.6,0.4-1.3,0.7-1.9L7,0C3.6,9.8,1.5,18.2,0.7,24.8L2.6,25
		c0.4-3.1,1.1-6.7,2-10.6c3.8-1,6.2,0,8.5,0.9c1.5,0.6,3,1.2,4.9,1.2c1.4,0,2.9-0.3,4.7-1.3l1.6-0.9L22.7,13.5z M13.8,13.5
		c-2.3-0.9-4.8-1.9-8.6-1.2c0.7-2.5,1.4-5.1,2.3-7.8c4,0.2,6.7,3.2,9.2,6.1c1.2,1.3,2.3,2.6,3.5,3.6C17.7,15,16,14.3,13.8,13.5z"/>
</g>
</svg>
				</div>
			</div>
		</div> 
	</section>
<!-- Galerie -->
	
	<?php 
// check if the flexible content field has rows of data
if( have_rows('content') ):
     // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'images' ):
        	$image = get_sub_field('image');
        	$scroll = get_sub_field('scroll');
        	$desktopOnly = get_sub_field('desktop_only');
        	if ($desktopOnly == 1) {
        		$class = 'hide-for-small-only';
        	}
        	if ($scroll == 1) {
		?>
			<section class="btws-fixed-background <?php echo $class; ?>" style="background-image:url(<?php echo $image['url']; ?>);" ></section>
		<?php
			}
		else{
			?>
			<section class="btws-fixed-background no-fixed <?php echo $class; ?>" style="background-image:url(<?php echo $image['url']; ?>);" ></section>
		<?php
			}
		?>
        <?php
        endif;

        if( get_row_layout() == 'texte_supp' ): 

        	$headline = get_sub_field('headline');
        	$colorBackground = get_sub_field('couleur_de_fond');
        	$colorText = get_sub_field('couleur_du_texte');
		?>
			<section class="btws-content headline container" style="color:<?php echo $colorText; ?>;background-color:<?php echo $colorBackground; ?>;">
					<div class="row">
					<div class="medium-8 columns medium-centered">
						<?php echo $headline; ?>
					</div>
				</div>
			</section>

		<?php
        endif;

    endwhile;

else :

    // no layouts found

endif;


?>

<!-- End Galerie -->

	<?php //terminer la boucle ?>
	<?php endwhile; ?>
	<?php endif; ?>


	<section class="btws-nav works <?php $next_post = get_next_post(); if ( !is_a( $next_post , 'WP_Post' ) ) { echo "no_next"; }?><?php $prev_post = get_previous_post(); if (empty( $prev_post )): ?> no_prev<?php endif; ?> cf">
		<ul>
		<?php $prev_post = get_previous_post();
			if (!empty( $prev_post )): ?>
				<li>
					<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="see-more-link"><?php echo get_the_title($prev_post->ID); ?></a>
				</li>
			<?php endif; ?>
			<?php $next_post = get_next_post();
			if ( is_a( $next_post , 'WP_Post' ) ) { ?>
			<li>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="see-more-link"><?php echo get_the_title($next_post->ID) ?></a>
			</li>
			
			<?php } ?>
			<li id="archive">
				<a href="<?php echo get_permalink(7); ?>">Autres réalisations</a>
			</li>

		</ul>
	</section>
</section>