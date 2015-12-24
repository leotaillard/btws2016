<?php query_posts('posts_per_page=-1&orderby=rand&post_type=people'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

	$couleurText = get_field('couleur_du_texte');


?>

	<article id="post-<?php the_ID(); ?>" class="btws-the-team btws-fixed-background" style="background-image:url('<?php echo $post_thumbnail_url; ?>');" >
<!-- 		<div class="btws-content">
			<h2><span><?php the_title(); ?></span></h2>
			<div class="btws-the-content"><?php the_content(); ?></div>

	  <?php
	  		$facebook = get_field( "facebook" );
			$twitter = get_field( "twitter" );
			$instagram = get_field( "instagram" );
			$mail = get_field( "mail" );

			if( !empty($facebook) || !empty($twitter) || !empty($instagram) || !empty($mail)): ?>
				<nav class="social-network">
					<?php if( !empty($facebook)){ ?><a href="<?php echo $facebook ?>" target="_blank">Facebook</a><?php } ?>
					<?php if( !empty($twitter)){ ?><a href="<?php echo $twitter ?>" target="_blank">Twitter</a><?php } ?>
					<?php if( !empty($instagram)){ ?><a href="<?php echo $instagram ?>" target="_blank">Instagram</a><?php } ?>
					<?php if( !empty($mail)){ ?><a href="mailto:<?php echo $mail ?>?subject=Coucou <?php the_title(); ?>">Email</a><?php } ?>
				</nav>
			<?php endif; ?>
		</div>
 -->	</article>

<?php endwhile; // end of the loop. ?>
