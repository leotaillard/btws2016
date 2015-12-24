	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	<section class="btws-main-content container">
		<div class="row">
			<div class="medium-8 columns medium-centered">
				<h1 class="btws-the-title"><?php the_title(); ?></h1>
				<div class="btws-the-author">Textes et images : <?php echo(get_the_author()); ?></div>
				<div class="btws-the-content"><?php the_content(); ?></div>
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

        	if ($scroll == 1) {
		?>
			<section class="btws-fixed-background" style="background-image:url(<?php echo $image['url']; ?>);" ></section>
		<?php
			}
		else{
			?>
			<section class="btws-fixed-background no-fixed" style="background-image:url(<?php echo $image['url']; ?>);" ></section>
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
		<section class="btws-nav journal <?php $next_post = get_next_post(); if ( !is_a( $next_post , 'WP_Post' ) ) { echo "no_next"; }?><?php $prev_post = get_previous_post(); if (empty( $prev_post )): ?> no_prev<?php endif; ?> cf">
		<ul>
		<?php $prev_post = get_previous_post();
			if (!empty( $prev_post )): ?>
				<li>
					<a href="<?php echo get_permalink( $prev_post->ID ); ?>">gazette précédente</a>
				</li>
			<?php endif; ?>
			<?php $next_post = get_next_post();
			if ( is_a( $next_post , 'WP_Post' ) ) { ?>
			<li>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">gazette suivante</a>
			</li>
			
			<?php } ?>
			<li id="archive">
				<a href="<?php echo get_permalink(30); ?>">Autres réalisations</a>
			</li>

		</ul>
	</section>