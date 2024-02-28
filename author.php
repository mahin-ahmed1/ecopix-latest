<?php
/**
 * Archive page
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

	<main id="primary" class="site-main">
		<div class="pb-5 <?php echo apply_filters("ecopix_entry_content_layout","container");?>">
			<div class="row ">
				<div class="col-12 col-lg-9">
                    <div class="author-box">
                        <header class="entry-header text-center">
                        <?php 

                        $ecopix_author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

                        $ecopix_author_description = $ecopix_author->description ? $ecopix_author->description:'';

                        echo get_avatar(get_the_author_meta('ID'))."<br/>";

                        echo "<span class='text-uppercase d-block'>". $ecopix_author->nickname."</span>";

                        if($ecopix_author_description !=''){
                            echo $ecopix_author->description;
                        }  
                        ?>
                        </header>
                    </div>
					<div class="row">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/?>
							
								<div class="col-4 mt-4">
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

				<!-- SIDEBAR AREA -->
				<?php if(get_theme_mod('sidebar_switch','on')):?>
				<div class="col-12 col-lg-3 sidebar-area">
					<?php get_sidebar();?>
				</div>
				<?php endif;?>

			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
