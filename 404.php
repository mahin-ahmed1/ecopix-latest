<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ecopix 
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found <?php echo apply_filters("ecopix_entry_content_layout","container");?> pb-5">
			<div class="row">	
				<div class="col-12 loop-area <?php echo apply_filters('ecopix_col_manage','col-lg-9');?>">
					<header class="page-header entry-header text-center">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ecopix' ); ?></h1>
					</header><!-- .page-header -->	
					<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ecopix' ); ?></p>
				</div>
					<!-- SIDEBAR AREA START -->
				<?php if(get_theme_mod('sidebar_switch','on')):?>
				<div class="col-12 col-lg-3 sidebar-area">
					<?php get_sidebar();?>
				</div>
				<?php endif;?>
				<!-- SIDEBAR AREA END-->
				<!-- .widget -->

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
