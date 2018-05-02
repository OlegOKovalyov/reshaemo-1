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
		//add_theme_support( 'automatic-feed-links' );

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
    // Добавляем виджеты в сайдбар страницы Высшее образование меню
    register_sidebar( array(
        'name'          => 'Cat Menu Vysh Obrz Sidebar',
        'id'            => 'catmenu_vyshobrz_sb',
        'description'   => 'Левая колонка: Высшее образование меню',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) );
    // Добавляем виджеты в сайдбар страницы Последипломное образование меню
    register_sidebar( array(
        'name'          => 'Cat Menu PosleDipl Obrz Sidebar',
        'id'            => 'catmenu_pdobrz_sb',
        'description'   => 'Левая колонка: Последипломное образование статьи',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) );
    // Добавляем виджеты в сайдбар страницы Средне-специальное образование меню
    register_sidebar( array(
        'name'          => 'Cat Menu SrednSpec Obrz Sidebar',
        'id'            => 'catmenu_srspobrz_sb',
        'description'   => 'Левая колонка: Средне-специальное образование статьи',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) ); 
    // Добавляем виджеты в сайдбар страницы Аттестаты школы меню
    register_sidebar( array(
        'name'          => 'Cat Menu AttSchool Sidebar',
        'id'            => 'catmenu_attschool_sb',
        'description'   => 'Левая колонка: Аттестаты школы статьи',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) );        
    // Добавляем виджеты в сайдбар страницы Справки и свидетельства меню
    register_sidebar( array(
        'name'          => 'Cat Menu SprSva Sidebar',
        'id'            => 'catmenu_sprsva_sb',
        'description'   => 'Левая колонка: Справки и свидетельства статьи',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) );
    // Добавляем виджеты в сайдбар страницы Видеообзор дипломов
    register_sidebar( array(
        'name'          => 'Cat Menu Video Obzor Sidebar',
        'id'            => 'catmenu_videobz_sb',
        'description'   => 'Левая колонка: Видеообзор дипломов',
        'class'         => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="list-group-item active head_lgri">',
        'after_title'   => '</h3>',
      ) );                    

add_action( 'widgets_init', 'reshaemo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reshaemo_scripts() {

	/* CSS */
	wp_enqueue_style( 'reshaemo-style', get_stylesheet_uri() );

	//wp_enqueue_style( 'reshaemo-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	//wp_enqueue_style( 'reshaemo-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic', false, false, 'all');

	//wp_enqueue_style( 'reshaemo-wpcf7', get_template_directory_uri() . '/wp-content/plugins/contact-form-7/includes/css/styles.css', false, false, 'all' );

	//wp_enqueue_style( 'reshaemo-fancybox3', get_template_directory_uri() . '/fancybox/dist/jquery.fancybox.min.css' );

/*	// Remove themes old version of jQuery and load a compatible version
	function reshaemo_update_jquery () {
		if ( !is_admin() ) { 
		   wp_deregister_script('jquery');
	 	   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, true);
		   wp_enqueue_script('jquery');
		}
	}
	add_action('wp_enqueue_scripts', 'reshaemo_update_jquery' );*/

	wp_enqueue_script( 'reshaemo-javascript', get_template_directory_uri() . '/js/app.min.js', array('jquery'), '20180323', true );

	//wp_enqueue_script( 'reshaemo-fancybox3', get_template_directory_uri() . '/fancybox/dist/jquery.fancybox.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reshaemo_scripts' );

/**
 * Implement Shortcodes for Galleries on the Prices Page (Цены).
 */
require get_template_directory() . '/inc/shortcodes.php';
include('shortcodes/galleries.php');

/**
 * Implement Shortcodes for All Cards.
 */
include('shortcodes/cards-specs.php');
include('shortcodes/cards-baklvr.php');
include('shortcodes/cards-magstr.php');
include('shortcodes/cards-kdnauk.php');
include('shortcodes/cards-techclg.php');
include('shortcodes/cards-attst.php');
include('shortcodes/cards-sprvk.php');
include('shortcodes/cards-svidva.php');
include('shortcodes/cards-uchptu.php');

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

/* Определение браузера пользователя */
function user_browser($agent) {
   preg_match("/(MSIE|Opera|Firefox|Chrome|Version|Opera Mini|Netscape|Konqueror|SeaMonkey|Camino|Minefield|Iceweasel|K-Meleon|Maxthon)(?:\/| )([0-9.]+)/", $agent, $browser_info); // регулярное выражение, которое позволяет отпределить 90% браузеров
        list(,$browser,$version) = $browser_info; // получаем данные из массива в переменную
        if (preg_match("/Opera ([0-9.]+)/i", $agent, $opera)) return 'Opera '.$opera[1]; // определение _очень_старых_ версий Оперы (до 8.50), при желании можно убрать
        if ($browser == 'MSIE') { // если браузер определён как IE
                preg_match("/(Maxthon|Avant Browser|MyIE2)/i", $agent, $ie); // проверяем, не разработка ли это на основе IE
                if ($ie) return $ie[1].' based on IE '.$version; // если да, то возвращаем сообщение об этом
                return 'IE '.$version; // иначе просто возвращаем IE и номер версии
        }
        if ($browser == 'Firefox') { // если браузер определён как Firefox
                preg_match("/(Flock|Navigator|Epiphany)\/([0-9.]+)/", $agent, $ff); // проверяем, не разработка ли это на основе Firefox
                if ($ff) return $ff[1].' '.$ff[2]; // если да, то выводим номер и версию
        }
        if ($browser == 'Opera' && $version == '9.80') return 'Opera '.substr($agent,-5); // если браузер определён как Opera 9.80, берём версию Оперы из конца строки
        if ($browser == 'Version') return 'Safari '.$version; // определяем Сафари
        if (!$browser && strpos($agent, 'Gecko')) return 'Browser based on Gecko'; // для неопознанных браузеров проверяем, если они на движке Gecko, и возращаем сообщение об этом
        return $browser.' '.$version; // для всех остальных возвращаем браузер и версию
}

/* Функция проверки, входит ли пользователь с мобильного устройства */
function reshaemo_is_mobile( $child_page, $number ) {
    if( wp_is_mobile() ) {
        $args = array(
            'parent' => $child_page, 
            'sort_column' => 'post_date', 
            'sort_order' => 'ASC',
            'hierarchical' => false, 
            'number' => $number
        );
    } else {
        $args = array(
            'child_of' => $child_page, 
            'sort_column' => 'post_date', 
            'sort_order' => 'ASC'
        );        
    }
    return $args;
}

// Оптимизируем сайт на WordPress
// Деактивируем некоторые последствия вызова wp_head:
remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head','wp_generator');  // скрыть версию wordpress
// Убираем скрипт из <head></head>:
/*if ( !is_admin() ) { 
	wp_deregister_script('jquery'); 
}*/
// Скрываем разные линки при отображении постов блога (следующий, предыдущий, короткий url):
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );
// Удаляем JSON API ссылки:
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
// Выключение плагина Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// Deregister Contact Form 7 JavaScript files on all pages without a form
add_action( 'wp_print_scripts', 'aa_deregister_javascript', 100 );
function aa_deregister_javascript() {
    if ( ! is_page( get_theme_mod( "header_contacts") ) ) {
        wp_deregister_script( 'contact-form-7' );
    }
}
// Перемещаем jQuery в футер сайта
add_action('wp_enqueue_scripts', 'true_peremeshhaem_jquery_v_futer');  
function true_peremeshhaem_jquery_v_futer() {  
 	// снимаем стандартную регистрацию jQuery
        wp_deregister_script('jquery');  
 
        // регистрируем для подключения в футере, описание параметров - в документации функции (ссылка чуть выше)
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);  
 
	// подключаем
        wp_enqueue_script('jquery');
}
// Отключаем файл стилей плагина Contact Form 7 
add_action( 'wp_print_styles', 'true_otkljuchaem_stili_contact_form', 100 ); // по идее вы можете использовать и хук wp_enqueue_scripts, хотя конкретно его я не тестировал
function true_otkljuchaem_stili_contact_form() {
	wp_deregister_style( 'contact-form-7' ); // в параметрах - ID подключаемого файла
}
// Отключаем файл скриптов плагина Contact Form 7
add_action( 'wp_enqueue_scripts', 'wpcf7_script_off' );
function wpcf7_script_off() {
	wp_deregister_script( 'contact-form-7' );
}    
// Remove the query string '?ver' from static resources and encode the parameters into the URL
function rm_query_string( $src ){   
    $parts = explode( '?ver', $src );
    return $parts[0];
}

if ( !is_admin() ) {
    add_filter( 'script_loader_src', 'rm_query_string', 15, 1 );
    add_filter( 'style_loader_src', 'rm_query_string', 15, 1 );
}