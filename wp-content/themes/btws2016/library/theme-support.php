<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage btws
 * @since btws 1.0.0
 */

if ( ! function_exists( 'btws_theme_support' ) ) :
function btws_theme_support() {
	// Add language support
	load_theme_textdomain( 'btws', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

}

add_action( 'after_setup_theme', 'btws_theme_support' );
endif;
?>
