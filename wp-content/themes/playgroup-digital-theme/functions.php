<?php
/**
 * Playgroup Digital Theme functions and definitions
 *
 * @package Playgroup Digital Theme
 */

if ( ! function_exists( 'playgroup_digital_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function playgroup_digital_theme_setup() {


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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'playgroup_digital_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // playgroup_digital_theme_setup
add_action( 'after_setup_theme', 'playgroup_digital_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function playgroup_digital_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'playgroup-digital-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'playgroup_digital_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function playgroup_digital_theme_scripts() {
	wp_enqueue_style( 'playgroup-digital-theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/vendor/animate.css' );

		global $wp_scripts;

wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '' , false );
wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '' , false );


	$wp_scripts->add_data('html5_shiv' , 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js' , 'conditional', 'lt IE 9');


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'packery', get_template_directory_uri() . '/js/packery.pkgd.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20120206', true );




}
add_action( 'wp_enqueue_scripts', 'playgroup_digital_theme_scripts' );

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Menu.
 */
add_theme_support( 'menus' );
function register_theme_menus () {
	register_nav_menus(
		array (
			'header-menu' => __('Header Menu')
			)
	 );
}
add_action('init', 'register_theme_menus');

/**
 * Add contact link to end of menu.
 */

function your_custom_menu_item ( $items, $args ) {
    if (is_single() && $args->theme_location == 'header-menu'); {
        $items .= '<li><a href="#" data-toggle="collapse" data-target=".navbar-collapse" class="contact-toggle">Contact</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );

function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

?>
