<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecopix
 */

?>

	<footer id="colophon" class="site-footer pb-2 pt-5 overflow-hidden">
		<div class="<?php echo apply_filters("ecopix_entry_content_layout","container");?>">
			<div class="footer-row row">
			<!--- WIDGET AREA 1 --->
				<?php if(is_active_sidebar('ecopix-footer-widget-1')):?>
				<div class="widget-1 col-12 col-lg-3 px-0 px-lg-5">
					<?php dynamic_sidebar( 'ecopix-footer-widget-1' ); ?>
				</div>
				<?php endif;?>
				
				<!--- WIDGET AREA 2 --->
				<?php if(is_active_sidebar('ecopix-footer-widget-2')):?>
				<div class="widget-2 col-12 col-lg-3 px-0 px-lg-5">
					<?php dynamic_sidebar( 'ecopix-footer-widget-2' ); ?>
				</div>
				<?php endif;?>

				<!--- WIDGET AREA 3 --->
				<?php if(is_active_sidebar('ecopix-footer-widget-3')):?>
				<div class="widget-3 col-12 col-lg-3 px-0 px-lg-5">
					<?php dynamic_sidebar( 'ecopix-footer-widget-3' ); ?>
				</div>
				<?php endif;?>

				<!--- WIDGET AREA 4 --->
				<?php if(is_active_sidebar('ecopix-footer-widget-4')):?>
				<div class="widget-4 col-12 col-lg-3 px-0 px-lg-5">
					<?php dynamic_sidebar( 'ecopix-footer-widget-4' ); ?>
				</div>
				<?php endif;?>
			</div>
		</div>
		<div class="site-info pt-4 text-center <?php echo apply_filters("ecopix_entry_content_layout","container");?>">
				<?php
				$ecopix_copyright = get_theme_mod('copyright_text',__('Copyright © 2023 - WordPress Theme by Mahin','ecopix'));
				echo "<p>".$ecopix_copyright."</p>";
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
