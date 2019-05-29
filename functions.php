<?php

remove_filter( 'the_content', 'wpautop' );


// for each sourah
function quran_row($atts)
{
    switch ($atts['number']){
        case 01:
            $sourah = 'الفاتحه';
            break;
        case 02:
                $sourah = 'البقره';
                break;
        case 03:
            $sourah = 'ال عمران';
            break;

    }
    return "
    <tr>
        <td width='5%'>" . $atts['number'] . "</td>
        <td width='10%'>$sourah</td>
        <td width='5%'><a href='http://dl.qurandl.com/" . $atts['src'] . "'><button type=\"button\" class=\"btn btn-success\">دانلود</button></a></td>
        <td width=\"30%\"><audio src='http://dl.qurandl.com/" . $atts['src'] . "' controls></audio></td>
    </tr>
    ";
}
add_shortcode('quran', 'quran_row');

// For start table
function table_start()
{
    return "
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
        <th width=\"5%\">شماره</th>
        <th width=\"10%\">نام سوره</th>
        <th width=\"5%\">دانلود</th>
        <th width=\"30%\">پخش آنلاین</th>
        </tr>
        </thead>
        <tbody>
    ";
}
add_shortcode('table_start', 'table_start');

// End table
function table_end(){
    return "
            </tbody>
        </table>
    </div>
    ";
}
add_shortcode('table_end','table_end');

// Register Custom Navigation Walker for function.php
require_once('class-wp-bootstrap-navwalker.php');
if ( ! function_exists( 'qurandl_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function qurandl_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on qurandl, use a find and replace
		 * to change 'qurandl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'qurandl', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'qurandl' ),
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
		add_theme_support( 'custom-background', apply_filters( 'qurandl_custom_background_args', array(
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
			'height'      => 150,
			'width'       => 200,
			'flex-width'  => false,
			'flex-height' => false,
		) );
	}
endif;
add_action( 'after_setup_theme', 'qurandl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qurandl_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'qurandl_content_width', 640 );
}
add_action( 'after_setup_theme', 'qurandl_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function qurandl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'qurandl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'qurandl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'qurandl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function qurandl_scripts() {
	wp_enqueue_style( 'qurandl-style', get_stylesheet_uri() );

	wp_enqueue_script( 'qurandl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'qurandl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'qurandl_scripts' );

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

