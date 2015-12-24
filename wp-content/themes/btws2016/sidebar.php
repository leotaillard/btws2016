<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage btws
 * @since btws 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'btws_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'btws_after_sidebar' ); ?>
</aside>
