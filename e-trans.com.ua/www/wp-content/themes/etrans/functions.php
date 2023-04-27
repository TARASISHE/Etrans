<?php
/**
 * etrans functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package etrans
 */
////carbon fields
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	require dirname( __FILE__ ). '/inc/carbon-fields-func.php';
}

/////////
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'etrans_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function etrans_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on etrans, use a find and replace
		 * to change 'etrans' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'etrans', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'etrans' ),
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
				'etrans_custom_background_args',
				array(
					'default-color' => 'ffffff',
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
endif;
add_action( 'after_setup_theme', 'etrans_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function etrans_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'etrans_content_width', 640 );
}
add_action( 'after_setup_theme', 'etrans_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function etrans_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'etrans' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'etrans' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'etrans_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function etrans_scripts() {
	wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAB_pfSHbfM4UU4qSvvVQLYn3m43bEVd7g&callback=initMap', array( 'jquery', ),null, true);
	wp_enqueue_script( 'slick-slider', get_template_directory_uri().'/assets/slick/slick.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'slick-slider'),null, true);
	//if(is_page(pll_get_post(24))){
		
		
	//}
	wp_deregister_script('jquery');
 wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
 wp_enqueue_script( 'ajax-mail-script', get_template_directory_uri() . '/assets/js/ajax-mailer.js', array( 'jquery',),null, true);
 wp_enqueue_script( 'modal-script', get_template_directory_uri() . '/assets/js/Modal.js', array( 'jquery',),null, true);
	wp_enqueue_style( 'etrans-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri().'/assets/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri().'/assets/slick/slick-theme.css' );
	wp_enqueue_style( 'media-style', get_template_directory_uri().'/assets/css/media.css' );
	wp_style_add_data( 'etrans-style', 'rtl', 'replace' );

	wp_enqueue_script( 'etrans-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'etrans-svg', get_template_directory_uri() . '/assets/js/svg.js', array( 'jquery' ),null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'etrans_scripts' );

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
/**
 * Load mailer
 */
require dirname(__FILE__). '/inc/mail.php';
add_action('wp_ajax_client_message', 'client_message');
add_action('wp_ajax_nopriv_client_message', 'client_message');
add_action('wp_ajax_main_form', 'main_form');
add_action('wp_ajax_nopriv_main_form', 'main_form');
add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
function register_news() {
	$news_args = array(
	  'public' => true,
	  'label'  => null,
	  'labels' => array(
		'name'               => 'Новости',
		'singular_name'      => 'Новость',
		'add_new'            => 'Добавить новость',
		'add_new_item'       => 'Добавление новости',
		'edit_item'          => 'Редактирование новости',
		'new_item'           => 'Новая новость',
		'view_item'          => 'Смотреть страницу новости',
		'search_items'       => 'Искать новость',
		'not_found'          => 'Не найдено',
		'not_found_in_trash' => 'Не найдено в корзине',
		'parent_item_colon'  => '',
		'menu_name'          => 'Новости',
	  ),
	  'menu_position' => 5,
	  'menu_icon' => 'dashicons-admin-site',
	  'rewrite' => array( 'slug' => 'news' ),
	  'has_archive' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'news', $news_args );
  }
  
  add_action( 'init', 'register_news' );
////////////////////Register cases posts
  function register_case() {
	$case_args = array(
	  'public' => true,
	  'label'  => null,
	  'labels' => array(
		'name'               => 'Кейсы',
		'singular_name'      => 'Кейсы',
		'add_new'            => 'Добавить кейс',
		'add_new_item'       => 'Добавление кейса',
		'edit_item'          => 'Редактирование кейса',
		'new_item'           => 'Новый кейса',
		'view_item'          => 'Смотреть страницу кейса',
		'search_items'       => 'Искать кейс',
		'not_found'          => 'Не найдено',
		'not_found_in_trash' => 'Не найдено в корзине',
		'parent_item_colon'  => '',
		'menu_name'          => 'Кейсы',
	  ),
	  'menu_position' => 5,
	  'menu_icon' => 'dashicons-location-alt',
	  'rewrite' => array( 'slug' => 'case' ),
	  'has_archive' => true,
	  'supports' => array( 'title', 'thumbnail')
	);
	register_post_type( 'case', $case_args );
  }
  
  add_action( 'init', 'register_case' );

  add_action('init', 'register_case_types');
  function register_case_types(){
  register_taxonomy('case-cat', array('case'), array(
	  'label'                 => 'Категории кейсов',
	  'labels'                => array(
		'name'              => 'Категории кейсов',
		'singular_name'     => 'Категории кейсов',
		'search_items'      => 'Искать категорию',
		'all_items'         => 'Все категории',
		'parent_item'       => 'Родительская категория',
		'parent_item_colon' => 'Родитительская категория:',
		'edit_item'         => 'Редактировать категорию',
		'update_item'       => 'Обновить категорию',
		'add_new_item'      => 'Добавить категорию',
		'new_item_name'     => 'Заголовок',
		'menu_name'         => 'Категории кейсов',
	  ),
	  'description'           => 'Категории для кейсов',
	  'public'                => true,
	  'show_in_nav_menus'     => true,
	  'show_ui'               => true,
	  'show_tagcloud'         => false,
	  'hierarchical'          => true,
	  'rewrite'               => array( 'hierarchical' => true ),
	  'show_admin_column'     => true
	));
  };
///////////////////////////////////Register services posts
function register_services() {
	$services_args = array(
	  'public' => true,
	  'label'  => null,
	  'labels' => array(
		'name'               => 'Услуги',
		'singular_name'      => 'Услуги',
		'add_new'            => 'Добавить услугу',
		'add_new_item'       => 'Добавление услуги',
		'edit_item'          => 'Редактирование услуги',
		'new_item'           => 'Новая услуга',
		'view_item'          => 'Смотреть страницу услуги',
		'search_items'       => 'Искать услугу',
		'not_found'          => 'Не найдено',
		'not_found_in_trash' => 'Не найдено в корзине',
		'parent_item_colon'  => '',
		'menu_name'          => 'Услуги',
	  ),
	  'menu_position' => 6,
	  'menu_icon' => 'dashicons-store',
	  'rewrite' => array( 'slug' => 'services' ),
	  'has_archive' => true,
	  'supports' => array( 'title','editor', 'thumbnail')
	);
	register_post_type( 'services', $services_args );
  }
  
  add_action( 'init', 'register_services' );

  add_action('init', 'register_services_types');
  function register_services_types(){
  register_taxonomy('services-cat', array('services'), array(
	  'label'                 => 'Категории услуг',
	  'labels'                => array(
		'name'              => 'Категории услуг',
		'singular_name'     => 'Категории услуг',
		'search_items'      => 'Искать категорию',
		'all_items'         => 'Все категории',
		'parent_item'       => 'Родительская категория',
		'parent_item_colon' => 'Родитительская категория:',
		'edit_item'         => 'Редактировать категорию',
		'update_item'       => 'Обновить категорию',
		'add_new_item'      => 'Добавить категорию',
		'new_item_name'     => 'Заголовок',
		'menu_name'         => 'Категории услуг',
	  ),
	  'description'           => 'Категории для услуг',
	  'public'                => true,
	  'show_in_nav_menus'     => true,
	  'show_ui'               => true,
	  'show_tagcloud'         => false,
	  'hierarchical'          => true,
	  'rewrite'               => array( 'hierarchical' => true ),
	  'show_admin_column'     => true
	));
  };
///////////Add menu
register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));

require get_template_directory() . '/inc/translation.php';
