<?php
/*
Template Name: Archives work
*/
?>

<?php include('header.php') ?>


	<?php
		$count_posts = wp_count_posts('work');
		$posts = $count_posts->publish;
	?>
	<?php query_posts('posts_per_page=-1&orderby=DESC&post_type=work'); ?>
	<?php while ( have_posts() ) : the_post(); ?>

        <?php  // check if the post has a Post Thumbnail assigned to it.
    		$post_id  = get_the_ID();
			$thumb_id = get_post_thumbnail_id( $post_id );
			$cover_url = wp_get_attachment_image_src($thumb_id,'work-thumbnails');
			$post_thumbnail_url = wp_get_attachment_url($thumb_id,'work-thumbnails');
			$couleurText = get_field('couleur_du_texte');
		?>

	<section id="works" class="btws-fixed-background <?php echo $couleurText; ?>" data-original="<?php echo $post_thumbnail_url; ?>" style="background-image:url('<?php echo $post_thumbnail_url; ?>');">
		<div class="btws-content">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
		</div>

	</section>
	<?php $posts--; ?>
	<?php endwhile; // end of the loop. ?>

	<?php include('footer.php') ?>