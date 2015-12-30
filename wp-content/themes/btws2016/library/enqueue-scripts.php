<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage btws
 * @since btws 1.0.0
 */

if ( ! function_exists( 'btws_scripts' ) ) :
	function btws_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.2.0', 'all' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/stylesheets/main.css', array(), '2.2.0', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/assets/javascript/vendor/classie.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'elevator', get_template_directory_uri() . '/assets/javascript/vendor/elevator.min.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'bigtext', get_template_directory_uri() . '/assets/javascript/vendor/jquery.bigtext.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'fittext', get_template_directory_uri() . '/assets/javascript/vendor/jquery.fittext.js', array('jquery'), '2.2.0', true );
		// wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/assets/javascript/vendor/jquery.lazyload.js', array('jquery'), '2.2.0', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/javascript/vendor/modernizr.custom.js', array('jquery'), '2.2.0', true );

	wp_enqueue_script( 'btws', get_template_directory_uri() . '/assets/javascript/custom/main.js', array('jquery'), '2.2.0', true );

	}

	add_action( 'wp_enqueue_scripts', 'btws_scripts' );
endif;

?>
