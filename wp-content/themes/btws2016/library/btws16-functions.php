<?php 
add_filter('show_admin_bar', '__return_false');


/**
 * Proper way to add favicon to admin
 */
function favicon(){
echo '<link rel="shortcut icon" href="'.get_stylesheet_directory_uri().'/ico/admin-favicon.png" />',"\n";
}

add_action('admin_head','favicon');



add_action( 'after_setup_theme', 'btws_crop_image' );
function btws_crop_image() {
  add_image_size( 'cover-thumbnails', 350, 430, array( 'center', 'center' ) ); // 350x430
  add_image_size( 'work-thumbnails', 480, 480, array( 'center', 'center' ) ); // 480x480
  add_image_size( 'archive-thumbnails', 150, 150, array( 'center', 'center' ) ); // 150x150
}

function wp_trim_all_excerpt($text) { // Creates an excerpt if needed; and shortens the manual excerpt as well
	global $post;
	if ( '' == $text ) {
	$text = get_the_content('');
	$text = apply_filters('the_content', $text);
	$text = str_replace(']]>', ']]&gt;', $text);
	}
	$text = strip_shortcodes( $text ); // optional
	$text = strip_tags($text);
	$excerpt_length = apply_filters('excerpt_length', 15);
	$excerpt_more = apply_filters('excerpt_more', '' . '... Bla bla bla');
	$words = explode(' ', $text, $excerpt_length + 1);
	if (count($words)> $excerpt_length) {
	array_pop($words);
	$text = implode(' ', $words);
	$text = $text . $excerpt_more;
	} else {
	$text = implode(' ', $words);
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');


