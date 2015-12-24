<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage btws
 * @since btws 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.png">
		<?php if (is_front_page()) { ?><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.png"><?php } ?>
		<?php if (is_page_template( 'template-archives-journal.php' ) || is_home() || is_singular('post')) { ?><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/gazette-favicon.png"><?php } ?>
		<?php if (is_page_template( 'template-archive-work.php' ) || is_page_template( 'template-last-work.php' ) || is_singular( 'work' )) { ?><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/work-favicon.png"><?php } ?>
		<?php if (is_page(7)) { ?><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/work-favicon.png"><?php } ?>
		<?php if (is_page(30)) { ?><link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/gazette-favicon.png"><?php } ?>


		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'btws_after_body' ); ?>
	<?php do_action( 'btws_layout_start' ); ?>

	<a id="btws-logo-little" href="<?php bloginfo('url'); ?>">
		<svg width="35px" height="40px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 68" style="enable-background:new 0 0 60 68;" xml:space="preserve">
		<path d="M22.338,57.43v-9.354H22.31v-5.083c0-5.416-3.811-8.633-8.67-9.136c4.927-0.487,8.67-3.763,8.67-9.152v-7.168h0.029v-7.281
		c0-2.828,1.09-5.497,3.07-7.515c1.638-1.67,3.205-2.741,5.48-3.093H-0.31C1.824-0.02,3.783,0.95,5.328,2.461
		c1.958,1.914,3.036,4.486,3.036,7.242v22.608v3.06v22.611c0,2.756-1.078,5.328-3.036,7.242c-1.546,1.511-3.504,2.481-5.634,2.814
		h31.31c-2.275-0.352-3.958-1.423-5.596-3.093C23.428,62.926,22.338,60.257,22.338,57.43z"/>
		<path d="M40.055-0.353h-6.036c5.203,0.806,8.55,5.303,8.55,10.608v15.807c0,4.313,3.337,6.188,6.326,6.188
		c4.773,0,10.795-5.222,10.795-15.669C59.69,6.111,51.195-0.353,40.055-0.353z"/>
		<path d="M55.028,37.837c-0.337-0.382-0.715-0.727-1.126-1.029C54.292,37.119,54.668,37.463,55.028,37.837z"/>
		<path d="M40.055,68.035h-6.132c5.203-0.806,8.646-5.303,8.646-10.608V41.973c0-4.313,3.471-6.541,6.326-6.541
		c4.773,0,10.795,3.324,10.795,13.771C59.69,59.672,51.195,68.035,40.055,68.035z"/>
		</svg>
	</a>

	<header class="btws-header">
		<div id="trigger-overlay"><span></span></div>
			<!-- Open/close -->
			<div class="overlay overlay-hugeinc">
				<nav>
					<?php wp_nav_menu(); ?>
				</nav>
			</div>
			<h1>
				<a href="<?php bloginfo('url'); ?>">
					<svg height="60px" width="68px" id="btws-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 68" style="enable-background:new 0 0 60 68;" xml:space="preserve">
						<path d="M22.338,57.43v-9.354H22.31v-5.083c0-5.416-3.811-8.633-8.67-9.136c4.927-0.487,8.67-3.763,8.67-9.152v-7.168h0.029v-7.281
						c0-2.828,1.09-5.497,3.07-7.515c1.638-1.67,3.205-2.741,5.48-3.093H-0.31C1.824-0.02,3.783,0.95,5.328,2.461
						c1.958,1.914,3.036,4.486,3.036,7.242v22.608v3.06v22.611c0,2.756-1.078,5.328-3.036,7.242c-1.546,1.511-3.504,2.481-5.634,2.814
						h31.31c-2.275-0.352-3.958-1.423-5.596-3.093C23.428,62.926,22.338,60.257,22.338,57.43z"/>
						<path d="M40.055-0.353h-6.036c5.203,0.806,8.55,5.303,8.55,10.608v15.807c0,4.313,3.337,6.188,6.326,6.188
						c4.773,0,10.795-5.222,10.795-15.669C59.69,6.111,51.195-0.353,40.055-0.353z"/>
						<path d="M55.028,37.837c-0.337-0.382-0.715-0.727-1.126-1.029C54.292,37.119,54.668,37.463,55.028,37.837z"/>
						<path d="M40.055,68.035h-6.132c5.203-0.806,8.646-5.303,8.646-10.608V41.973c0-4.313,3.471-6.541,6.326-6.541
						c4.773,0,10.795,3.324,10.795,13.771C59.69,59.672,51.195,68.035,40.055,68.035z"/>
					</svg>
				</a>
			</h1>
		<?php get_template_part( 'parts/full-page'); ?>
	</header>

		<?php do_action( 'btws_after_header' ); ?>
