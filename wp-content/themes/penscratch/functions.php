<?php
/**
 * Penscratch functions and definitions
 *
 * @package Penscratch
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 656; /* pixels */
}

if ( ! function_exists( 'penscratch_content_width' ) ) :

	function penscratch_content_width() {

		global $content_width;

		if ( is_page_template( 'fullwidth-page.php' ) && is_active_sidebar( 'sidebar-1' ) ) {
			$content_width = 937;
		}
	}

endif;
add_action( 'template_redirect', 'penscratch_content_width' );

if ( ! function_exists( 'penscratch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function penscratch_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Penscratch, use a find and replace
	 * to change 'penscratch' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'penscratch', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'penscratch-featured', '656', '300', true );
	add_image_size( 'penscratch-site-logo', '300', '300' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'penscratch' ),
		'social'  => __( 'Social Links', 'penscratch' ),
	) );
	
	add_editor_style( array( 'editor-style.css', penscratch_fonts_url(), get_template_directory_uri() . '/genericons/genericons.css' ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'penscratch_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );
}
endif; // penscratch_setup
add_action( 'after_setup_theme', 'penscratch_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function penscratch_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'penscratch' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'penscratch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function penscratch_scripts() {
	wp_enqueue_style( 'penscratch-style', get_stylesheet_uri() );
	wp_enqueue_style( 'penscratch-fonts', penscratch_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );

	wp_enqueue_script( 'penscratch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'penscratch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'penscratch_scripts' );

/**
 * Register Google Fonts
 */
function penscratch_fonts_url() {
    $fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Roboto Slab, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$robotoslab = _x( 'on', 'Roboto Slab font: on or off', 'penscratch' );

	if ( 'off' !== $robotoslab  ) {

		$font_families = array();
		$font_families[] = 'Roboto+Slab:300,400,700';

		$query_args = array(
			'family' => implode( '|', $font_families ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue Google Fonts for custom headers
 */
function penscratch_admin_scripts() {

	wp_enqueue_style( 'penscratch-fonts', penscratch_fonts_url(), array(), null );

}
add_action( 'admin_print_styles-appearance_page_custom-header', 'penscratch_admin_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*
 * Para manipular la barra de admin
 */
 