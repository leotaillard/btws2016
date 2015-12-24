<?php include('header.php') ?>

	<section class="btws-archive journal">

	<?php
	$current_author = get_query_var('author');
	$author_posts=  get_posts( 'author='.$user->id.'&posts_per_page=-1' );
	if($author_posts){
	echo '<ul class="btws-covers cf">';


	foreach ($author_posts as $author_post)  {
	 // echo '<li><a href="'.get_permalink($author_post->ID).'">'.$author_post->post_title.'</a></li>';
	$post_id  = get_the_ID();
	$thumb_id = get_post_thumbnail_id( $author_post->ID );
	$cover_url = wp_get_attachment_image_src($thumb_id,'cover-thumbnails');

	?>
	<li class="btws-cover">
		<a href="<?php the_permalink(); ?>">
		<header><img src="<?php echo bloginfo('template_url'); ?>/img/logo-cover.png" alt=""></header>
		<article><img src="<?php echo $cover_url[0]; ?>" alt=""></article>
		<footer><p><?php echo $author_post->post_title; ?></p></footer>
		</a>
	</li>
	<?php

	}
	echo '</ul>';
	}
	?>


	</section>
<?php include('footer.php') ?>