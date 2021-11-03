<?php
/**
 * CubeHype functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CubeHype
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cubehype_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cubehype_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CubeHype, use a find and replace
		 * to change 'cubehype' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cubehype', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'cubehype' ),
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
				'cubehype_custom_background_args',
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
add_action( 'after_setup_theme', 'cubehype_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cubehype_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cubehype_content_width', 640 );
}
add_action( 'after_setup_theme', 'cubehype_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cubehype_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cubehype' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cubehype' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cubehype_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cubehype_scripts() {
	wp_enqueue_style( 'bootstrap-4-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css', array(), '4.6.0', 'all');
	wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');
	wp_enqueue_style( 'default-style', get_stylesheet_uri(), array(),_S_VERSION);
	wp_enqueue_style( 'cubehype-style', get_template_directory_uri().'/assets/css/stylesheet.css', array(), '1.0.1', 'all');
	wp_style_add_data( 'cubehype-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cubehype-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cubehype-customizer', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-4-js','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'), '4.6.0', true);
	wp_enqueue_script( 'cubehype-script', get_template_directory_uri(). '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_localize_script( 'cubehype-script', 'script_object', array(

		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'cat' => single_cat_title('', false),
		'tag' => single_tag_title('', false),
		'search' => get_query_var('s'),
	) );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cubehype_scripts' );


function web_loadmore_ajax_handler(){
 
	$offset = $_POST["offset"];

	$args = array(
        'post_type' => 'post',
		'status' => 'publish',
		'posts_per_page' => 4,
		'offset' => $offset,
     );
 
	$post = new WP_Query( $args );
 
		while($post->have_posts() ): 
			$post->the_post();
			get_template_part( 'template-parts/content-default');
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore', 'web_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'web_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function loadmore_category(){
 
	$offset = $_POST["offset"];
	$category = $_POST["cat"];

	$args = array(
        'post_type' => 'post',
		'status' => 'publish',
		'posts_per_page' => 9,
		'offset' => $offset,
		'category_name' => $category,
     );
 
	$post = new WP_Query( $args );
 
		$i = 1;
		while($post->have_posts() ): 
			$post->the_post();

			if($i % 3 != 0) {
				get_template_part( 'template-parts/content-category');
				
			}
			elseif ($i % 3 == 0){
				get_template_part( 'template-parts/content-category-big');
			}
			
			$i++;
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore-category', 'loadmore_category'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-category', 'loadmore_category'); // wp_ajax_nopriv_{action}


function loadmore_tag(){
 
	$offset = $_POST["offset"];
	$tag = $_POST["tag"];

	$args = array(
        'post_type' => 'post',
		'status' => 'publish',
		'posts_per_page' => 10,
		'offset' => $offset,
		'tag' => $tag,
     );
 
	$post = new WP_Query( $args );
 
		while($post->have_posts() ): 
			$post->the_post();

			get_template_part( 'template-parts/content-default');
			
		endwhile;
	die; 
}
 
add_action('wp_ajax_loadmore-tag', 'loadmore_tag'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-tag', 'loadmore_tag'); // wp_ajax_nopriv_{action}

function loadmore_search(){
 
	$offset = $_POST["offset"];
	$search = $_POST["s"];

	$args = array(
        'post_type' => 'post',
		'status' => 'publish',
		'posts_per_page' => 10,
		'offset' => $offset,
		's' => $search,
     );
 
	$post = new WP_Query( $args );
		while($post->have_posts() ): 
			$post->the_post();
				get_template_part( 'template-parts/content-default');
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore-search', 'loadmore_search'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-search', 'loadmore_search'); // wp_ajax_nopriv_{action}


// Add tag after post content
function tag_after_post_content($content){

		$tags = get_the_tags();
		if($tags){
			$content .= '<div class="post-tag-box">
								<div class="post-tag-label">
									TAGS:
								</div>
								<div class="post-tag-list-wrapper">';

			foreach($tags as $tag) {
				$values .= '<a href="'.get_tag_link($tag->term_id ).'" class="post-tag-list">'.$tag->name.'</a>';
			}
			
			$content_2 = '</div></div>';
			return $content.$values.$content_2;
		}
		return $content;
	
}
add_filter( "the_content", "tag_after_post_content" );



/**
 * Add more excerpt Length.
 */
function custom_excerpt_length( $length ) {
	return 350;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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

