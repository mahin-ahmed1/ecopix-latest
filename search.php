<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ecopix
 */

get_header();
?>

	<main id="primary" class="site-main blog-page">
		<div class="pb-5 <?php echo apply_filters("ecopix_entry_content_layout","container");?>">
			<div class="row <?php echo apply_filters('ecopix_sidebar_position','');?>">
				<div class="col-12 loop-area <?php echo apply_filters('ecopix_col_manage','col-lg-9');?>">
					<div class="row">
		<?php if ( have_posts() ) : ?>
			<div class="category-box">
				<header class="entry-header text-center">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'ecopix' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->
			</div>
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */?>
				<div class="col-12 col-lg-4 mt-4">
					<div class="card">
						<?php get_template_part( 'template-parts/content', 'search' );;?> 
					</div>
				</div>
				<?php

			endwhile;

			the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
				</div>
				</div>

				<!-- SIDEBAR AREA START -->
				<?php if(get_theme_mod('sidebar_switch','on')):?>
				<div class="col-12 col-lg-3 sidebar-area">
					<?php get_sidebar();?>
				</div>
				<?php endif;?>
				<!-- SIDEBAR AREA END-->

			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
