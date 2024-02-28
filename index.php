<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecopix 
 */

get_header();
?>

	<main id="primary" class="site-main blog-page">
		<div class="<?php echo apply_filters("ecopix_entry_content_layout","container");?> pb-5">
			<div class="row <?php echo apply_filters('ecopix_sidebar_position','');?>">
				<div class="col-12 loop-area <?php echo apply_filters('ecopix_col_manage','col-lg-9');?>">
					<div class="row">
					<div class="category-box">
                        <header class="entry-header text-center">
							<?php 
							$ecopix_blog_breadcrumb=__('Blog','ecopix');
							echo "<h2 class='entry-header-title'>";
							echo $ecopix_blog_breadcrumb;
							echo "</h2>";
							?>
                        </header>
                    </div>
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/?>
							
								<div class="col-12 col-lg-4 mt-4">
									<div class="card">
										<?php get_template_part( 'template-parts/content', get_post_type() );?> 
									</div>
								</div>
							
								<?php
								

							endwhile;

							the_posts_pagination(array(
								'prev_text' => __('Previous','ecopix'),
								'next_text' => __('Next','ecopix'),
								'mid_size' => 1, // Adjust the number of page numbers displayed
							));

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
get_footer();
