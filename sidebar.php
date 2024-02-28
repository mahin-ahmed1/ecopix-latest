<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecopix
 */

if ( ! is_active_sidebar( 'ecopix-blog-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'ecopix-blog-sidebar' ); ?>
</aside><!-- #secondary -->
