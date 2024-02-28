<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecopix
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecopix' ); ?></a>

	<header id="masthead" class="site-header header-area">
		<div class="<?php echo apply_filters("ecopix_entry_content_layout","container");?>">
			<div class="row align-items-center">

				<div class="col-3 logo-area">
					<?php the_custom_logo();?>
						<p class="site-title mb-0"><a class="text-decoration-none" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
					$ecopix_description = get_bloginfo( 'description', 'display' );
					if ( $ecopix_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $ecopix_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>

				<div class="col-9 menu-area">
				<a href="#" class="toggle-menu text-decoration-none"><span class="dashicons dashicons-menu"></span></a>
					<nav class="navbar navbar-expand-lg">
						<div class="nav-container <?php echo apply_filters('ecopix_topmenu_align','');?>" id="navbarNav">
							<?php
							$ecopix_header_menu = wp_nav_menu(
								array(
									'theme_location'=> 'header_menu',
									'container'		=> false,
									'menu_class'	=> "navbar-nav",
									'menu_id'		=>"header-navigation",
									'echo'			=> false,
								)
							);
							
							$ecopix_header_menu = str_replace("<ul>","<ul class='list-unstyled header-menu'",$ecopix_header_menu);
							$ecopix_header_menu = str_replace("page_item","nav-item",$ecopix_header_menu);
							$ecopix_header_menu = str_replace("<a",'<a class="nav-link"',$ecopix_header_menu);
							echo $ecopix_header_menu;
							?>	
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->



	