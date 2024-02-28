<?php
/**
 * ecopix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecopix
 */


 /*
*TGM LIBRARY 
*/
require_once get_theme_file_path().'/inc/ecopix-plugin-installer.php';


 /*
*Ecopix Customizer
*/
require_once get_theme_file_path().'/inc/ecopix-customizer.php';

 /*
*Ecopix Customizer Control
*/
require_once get_theme_file_path().'/inc/customizer-control.php';




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.6');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ecopix_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ecopix, use a find and replace
		* to change 'ecopix' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ecopix', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	add_theme_support( "align-wide" );

	add_theme_support( "responsive-embeds");

	add_theme_support( "wp-block-styles");

	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Primary', 'ecopix' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ecopix_custom_background_args',
			array(
				'default-color' => 'FAFBFC',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ecopix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecopix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ecopix_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecopix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecopix_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'ecopix' ),
			'id'            => 'ecopix-blog-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'ecopix' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 1', 'ecopix' ),
			'id'            => 'ecopix-footer-widget-1',
			'description'   => esc_html__( 'Add widgets here.', 'ecopix' ),
			'before_widget' => ' ',
			'after_widget'  => ' ',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 2', 'ecopix' ),
			'id'            => 'ecopix-footer-widget-2',
			'description'   => esc_html__( 'Add widgets here.', 'ecopix' ),
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 3', 'ecopix' ),
			'id'            => 'ecopix-footer-widget-3',
			'description'   => esc_html__( 'Add widgets here.', 'ecopix' ),
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 4', 'ecopix' ),
			'id'            => 'ecopix-footer-widget-4',
			'description'   => esc_html__( 'Add widgets here.', 'ecopix' ),
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

	
}
add_action( 'widgets_init', 'ecopix_widgets_init' );

function ecopix_custom_excerpt_length($length){
	$length=10;
	return $length;
}

add_action('excerpt_length','ecopix_custom_excerpt_length');

function ecopix_custom_excerpt_more($more){
	return '';
}

add_action('excerpt_more','ecopix_custom_excerpt_more');

/**
 * Enqueue scripts and styles.
 */
function ecopix_scripts() {

	wp_enqueue_style('ecopix-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',_S_VERSION);

	wp_enqueue_style('ecopix-template-style',get_template_directory_uri().'/assets/css/main.css',_S_VERSION);

	wp_enqueue_style( 'ecopix-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('dashicons');

	wp_enqueue_style('ecopix-google-font-jost','//fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;1,700&display=swap');

	wp_style_add_data( 'ecopix-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery');
	wp_enqueue_script('ecopix-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',_S_VERSION,array('jquery'),true );
	wp_enqueue_script( 'ecopix-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('ecopix-main',get_template_directory_uri().'/assets/js/main.js',_S_VERSION,array('jquery'),true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecopix_scripts' );


function ecopix_admin_script(){

	wp_enqueue_style('customizer-control-style',get_template_directory_uri().'/assets/css/admin.css',_S_VERSION);
}
add_action("admin_enqueue_scripts","ecopix_admin_script");


function ecopix_the_title($char_limit = 40) {
    $title = get_the_title();
    
    if (mb_strlen($title) > $char_limit) {
        $title = mb_substr($title, 0, $char_limit) . '...';
    }
    echo "<h2 class='entry-title'><a class='text-decoration-none' href='".get_permalink()."'>".$title."</a></h2>";
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



