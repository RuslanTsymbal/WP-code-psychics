<?php
/**
 * psychics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package psychics
 */

if ( ! function_exists( 'psychics_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function psychics_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on psychics, use a find and replace
	 * to change 'psychics' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'psychics', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'psychics' ),
	) );

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'psychics_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'psychics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function psychics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'psychics_content_width', 640 );
}
add_action( 'after_setup_theme', 'psychics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function psychics_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'psychics' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'psychics' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'psychics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function psychics_scripts() {
	wp_enqueue_style( 'psychics-style', get_stylesheet_uri() );

	wp_enqueue_script( 'psychics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'psychics-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'psychics_scripts' );

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


/*WordPress автоматически не добавляет размеры (width и height) - the_post_thumbnail()*/
function wph_remove_attributes($html) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'wph_remove_attributes', 10);
add_filter('image_send_to_editor', 'wph_remove_attributes', 10);


//Убрать авто теги Wordpress
remove_filter('term_description','wpautop');
remove_filter('the_content', 'wpautop'); 

//Custom Post Type  - 'FEATURED PSYCHICS'

add_action('init','f_psychics');
function f_psychics() {
	register_post_type('f_psychics', array (
		'public'=> true,
		'taxonomies' => array( 'category' ), 
		'supports'=> array('title','thumbnail', 'comments','editor', 'description','custom-fields','excerpt','page-attributes' ),
		'labels' => array(
			'name' => 'FEATURED PSYCHICS',
			'all_items' => 'Все записи',
			'add_new' => 'Добавить новую',
			'add_new_item' => 'Добавить запись'
		)
	)
  );
}

//Custom Post Type  - 'POPULAR PSYCHICS'

add_action('init','p_psychics');
function p_psychics() {
	register_post_type('p_psychics', array (
		'public'=> true,
		'taxonomies' => array( 'category' ), 
		'supports'=> array('title','thumbnail', 'comments','editor', 'description','custom-fields','excerpt','page-attributes' ),
		'labels' => array(
			'name' => 'POPULAR PSYCHICS',
			'all_items' => 'Все записи',
			'add_new' => 'Добавить новую',
			'add_new_item' => 'Добавить запись'
		)
	)
  );
}

