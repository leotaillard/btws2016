<?php
/*
Template Name: Archives journal
*/
?>

<?php include('header.php') ?>

	<section class="btws-archive journal">
		<ul class="btws-covers cf">

	<?php
		$count_posts = wp_count_posts();
		$posts = $count_posts->publish;
	?>
	<?php query_posts('posts_per_page=-1&orderby=DESC&post_type=post'); ?>
	<?php while ( have_posts() ) : the_post(); ?>

        <?php  // check if the post has a Post Thumbnail assigned to it.
    		$post_id  = get_the_ID();
			$thumb_id = get_post_thumbnail_id( $post_id );
			$cover_url = wp_get_attachment_image_src($thumb_id,'cover-thumbnails');
		?>

			<li id="post-<?php the_ID(); ?>" class="btws-cover">
				<a href="<?php the_permalink(); ?>">
					<header><img src="<?php echo bloginfo('template_url'); ?>/img/logo-cover.png" alt=""></header>
					<article><img src="<?php echo $cover_url[0]; ?>" alt=""></article>
					<footer><p><?php the_title(); ?> #<?php echo $posts ?></p></footer>
				</a>
			</li>
	<?php $posts--; ?>
	<?php endwhile; // end of the loop. ?>
 		</ul>
	</section>

	<?php include('footer.php') ?>