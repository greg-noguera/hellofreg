<?php
/**
 * hellofreg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hellofreg
 */


// I know it's a very lazy way to add content, I'm so sorry.

//This shortcode print the social media icons in the footer section

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hellofreg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hellofreg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hellofreg, use a find and replace
		 * to change 'hellofreg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hellofreg', get_template_directory() . '/languages' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hellofreg' ),
			)
		);

		register_nav_menus(
			array(
				'menu-2' => esc_html__( 'Footer', 'hellofreg-footer' ),
			)
		);


	}
endif;
add_action( 'after_setup_theme', 'hellofreg_setup' );

function add_theme_support_items(){
	add_theme_support( 'custom-logo');
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'customize-selective-refresh-widgets' );
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
}
add_action( 'after_setup_theme' , 'add_theme_support_items' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hellofreg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hellofreg_content_width', 640 );
}
add_action( 'after_setup_theme', 'hellofreg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hellofreg_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hellofreg' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hellofreg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hellofreg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hellofreg_scripts() {
	wp_enqueue_style( 'hellofreg-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hellofreg-style', 'rtl', 'replace' );

	wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'hellofreg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), _S_VERSION, true );

	wp_enqueue_script ( 'font-awesome-script', 'https://kit.fontawesome.com/bf1485badc.js', '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hellofreg_scripts' );

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

