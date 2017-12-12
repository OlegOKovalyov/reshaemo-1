<?php
/**
 * WP-Reshaemo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP-Reshaemo
 */

if ( ! function_exists( 'reshaemo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function reshaemo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WP-Reshaemo, use a find and replace
		 * to change 'reshaemo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'reshaemo', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'reshaemo' ),
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
		add_theme_support( 'custom-background', apply_filters( 'reshaemo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'reshaemo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reshaemo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reshaemo_content_width', 640 );
}
add_action( 'after_setup_theme', 'reshaemo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reshaemo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reshaemo' ),
		'id'            => 'sb-cat',
		'description'   => esc_html__( 'Add widgets here.', 'reshaemo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'reshaemo_widgets_init' );


/*function my_scripts_method(){
	if ( !is_admin() ) { 
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );*/

// Remove themes old version of jQuery and load a compatible version
/*function my_update_jquery () {
	if ( !is_admin() ) { 
	   wp_deregister_script('jquery');
 	   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, true);
	   wp_enqueue_script('jquery');
	}
}
add_action('wp_enqueue_scripts', my_update_jquery);
*/
/**
 * Enqueue scripts and styles.
 */
function reshaemo_scripts() {

	/* CSS */
	wp_enqueue_style( 'reshaemo-style', get_stylesheet_uri() );	

	/*wp_register_style( 'reshaemo_owl_carousel', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.carousel.min.css', array(), '20151215', true );
	wp_enqueue_style ( 'reshaemo_owl_carousel' );*/	

	/******wp_register_style( 'reshaemo-owl-theme-default', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.theme.default.min.css', array(), '20151215', true );
	wp_enqueue_style ( 'reshaemo-owl-theme-default' );*****/

	/*wp_enqueue_script( 'reshaemo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'reshaemo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );*/

	/* JS */

	/*<?php bloginfo('template_directory'); ?>/owlcarousel/dist/owl.carousel.min.js*/

    /*if (!is_admin()) {
        wp_enqueue_script('jquery');
    }*/	

	/*wp_enqueue_script( 'reshaemo-owl-carousel-js', get_template_directory_uri() . '/owlcarousel/dist/owl.carousel.min.js', array(), '20151215', true );*/
/* Подключаем наш js-файл скриптов common.js */
/*wp_register_script('common_my', get_template_directory_uri() . '/js/common.js', array ('jquery'), null, false);
wp_enqueue_script('common_my');*/

	/*wp_register_script( 'reshaemo_owl_carousel_js', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.js' );
	wp_enqueue_script( 'reshaemo_owl_carousel_js' );*/

/* https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous */	

/*wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, true);
wp_enqueue_script('jquery'); */

	/* wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous', array(), '20151215', false, false, true );
	wp_enqueue_script('popper'); - worked code */

	/* wp_enqueue_script( 'reshaemo-owl_carousel', get_template_directory_uri() . '/owlcarousel/dist/owl.carousel.min.js', array(), '20151215', true ); - worked code */

	wp_enqueue_script( 'reshaemo-javascript', get_template_directory_uri() . '/js/app.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reshaemo_scripts' );

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

/* Изменение длины анонса записи Отрывка */
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($len) { return 75; }