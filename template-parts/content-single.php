<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecopix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header <?php echo apply_filters("ecopix_single_text_align","text-left");?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );?>
            <?php
        if ( 'post' === get_post_type() ) :
			?>
            <!-- .entry-meta start-->
			<div class="entry-meta single-entry-meta <?php echo apply_filters("ecopix_single_entrymeta_align","m-auto");?>">
				<?php
				ecopix_posted_on();
				ecopix_posted_by();
				$ecopix_post_cat=get_the_category();
				$ecopix_term_link=get_term_link($ecopix_post_cat[0]->term_id);

				echo "<a href='".$ecopix_term_link."'class='text-decoration-none posted-on'>".$ecopix_post_cat[0]->name."</a>";
				?>
				
			</div>
            <!-- .entry-meta end-->
		<?php endif;
		else :
			ecopix_post_thumbnail(); 
			
		endif;?>
	</header><!-- .entry-header -->

	

	<div class="entry-content <?php echo apply_filters("ecopix_single_text_align","text-left");?>">
        <div class="post-thumbnail">
        <?php 
        the_post_thumbnail('full');?>
        </div>
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ecopix' ),
				'after'  => '</div>',
			)
		);?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
