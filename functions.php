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
        case 04:
            $sourah = 'النساء';
            break;
        case 05:
            $sourah = 'المائده';
            break;
        case 06:
            $sourah = 'الانعام';
            break;
        case 07:
            $sourah = 'الاعراف';
            break;
        case 8:
            $sourah = 'الانفال';
            break;
        case 9:
            $sourah = 'التوبه';
            break;
        case 10:
            $sourah = 'یونس';
            break;
        case 11:
            $sourah = 'هود';
            break;
        case 12:
            $sourah = 'یوسف';
            break;
        case 13:
            $sourah = 'الرعد';
            break;
        case 14:
            $sourah = 'ابراهیم';
            break;
        case 15:
            $sourah = 'الحجر';
            break;
        case 16:
            $sourah = 'النحل';
            break;
        case 17:
            $sourah = 'الاسراء';
            break;
        case 18:
            $sourah = 'الکهف';
            break;
        case 19:
            $sourah = 'مریم';
            break;
        case 20:
            $sourah = 'طه';
            break;
        case 21:
            $sourah = 'الانبیاء';
            break;
        case 22:
            $sourah = 'الحج';
            break;
        case 23:
            $sourah = 'المومنون';
            break;
        case 24:
            $sourah = 'النور';
            break;
        case 25:
            $sourah = 'الفرقان';
            break;
        case 26:
            $sourah = 'الشعراء';
            break;
        case 27:
            $sourah = 'النمل';
            break;
        case 28:
            $sourah = 'القصص';
            break;
        case 29:
            $sourah = 'العنکبوت';
            break;
        case 30:
            $sourah = 'الروم';
            break;
        case 31:
            $sourah = 'لقمان';
            break;
        case 32:
            $sourah = 'السجده';
            break;
        case 33:
            $sourah = 'الاحزاب';
            break;
        case 34:
            $sourah = 'سبا';
            break;
        case 35:
            $sourah = 'فاطر';
            break;
        case 36:
            $sourah = 'یس';
            break;
        case 37:
            $sourah = 'الصافات';
            break;
        case 38:
            $sourah = 'ص';
            break;
        case 39:
            $sourah = 'الزمر';
            break;
        case 40:
            $sourah = 'غافر';
            break;
        case 41:
            $sourah = 'فصلت';
            break;
        case 42:
            $sourah = 'الشوری';
            break;
        case 43:
            $sourah = 'الزخرف';
            break;
        case 44:
            $sourah = 'الدخان';
            break;
        case 45:
            $sourah = 'الجاثیه';
            break;
        case 46:
            $sourah = 'الاحقاف';
            break;
        case 47:
            $sourah = 'محمد';
            break;
        case 48:
            $sourah = 'الفتح';
            break;
        case 49:
            $sourah = 'الحجرات';
            break;
        case 50:
            $sourah = 'ق';
            break;
        case 51:
            $sourah = 'الذاریات';
            break;
        case 52:
            $sourah = 'الطور';
            break;
        case 53:
            $sourah = 'النجم';
            break;
        case 54:
            $sourah = 'القمر';
            break;
        case 55:
            $sourah = 'الرحمن';
            break;
        case 56:
            $sourah = 'الواقعه';
            break;
        case 57:
            $sourah = 'الحدید';
            break;
        case 58:
            $sourah = 'المجادله';
            break;
        case 59:
            $sourah = 'الحشر';
            break;
        case 60:
            $sourah = 'الممتحنه';
            break;
        case 61:
            $sourah = 'الصف';
            break;
        case 62:
            $sourah = 'الجمعه';
            break;
        case 63:
            $sourah = 'المنافقون';
            break;
        case 64:
            $sourah = 'التغابن';
            break;
        case 65:
            $sourah = 'الطلاق';
            break;
        case 66:
            $sourah = 'التحریم';
            break;
        case 67:
            $sourah = 'الملک';
            break;
        case 68:
            $sourah = 'القلم';
            break;
        case 69:
            $sourah = 'الحاقه';
            break;
        case 70:
            $sourah = 'المعارج';
            break;
        case 71:
            $sourah = 'نوح';
            break;
        case 72:
            $sourah = 'الجن';
            break;
        case 73:
            $sourah = 'المزمل';
            break;
        case 74:
            $sourah = 'المدثر';
            break;
        case 75:
            $sourah = 'القیامه';
            break;
        case 76:
            $sourah = 'الانسان';
            break;
        case 77:
            $sourah = 'المرسلات';
            break;
        case 78:
            $sourah = 'النباء';
            break;
        case 79:
            $sourah = 'النازعات';
            break;
        case 80:
            $sourah = 'عبس';
            break;
        case 81:
            $sourah = 'التکویر';
            break;
        case 82:
            $sourah = 'الانفطار';
            break;
        case 83:
            $sourah = 'المطففین';
            break;
        case 84:
            $sourah = 'الانشقاق';
            break;
        case 85:
            $sourah = 'البروج';
            break;
        case 86:
            $sourah = 'الطارق';
            break;
        case 87:
            $sourah = 'الاعلی';
            break;
        case 89:
            $sourah = 'الفجر';
            break;
        case 90:
            $sourah = 'البلد';
            break;
        case 91:
            $sourah = 'الشمس';
            break;
        case 92:
            $sourah = 'اللیل';
            break;
        case 93:
            $sourah = 'الضحی';
            break;
        case 94:
            $sourah = 'الشرح';
            break;
        case 95:
            $sourah = 'التین';
            break;
        case 96:
            $sourah = 'العلق';
            break;
        case 97:
            $sourah = 'القدر';
            break;
        case 98:
            $sourah = 'البینه';
            break;
        case 99:
            $sourah = 'الزلزله';
            break;
        case 100:
            $sourah = 'العادیات';
            break;
        case 101:
            $sourah = 'القارعه';
            break;
        case 102:
            $sourah = 'التکاثر';
            break;
        case 103:
            $sourah = 'العصر';
            break;
        case 104:
            $sourah = 'الهمزه';
            break;
        case 105:
            $sourah = 'الفیل';
            break;
        case 106:
            $sourah = 'قریش';
            break;
        case 107:
            $sourah = 'الماعون';
            break;
        case 108:
            $sourah = 'الکوثر';
            break;
        case 109:
            $sourah = 'الکافرون';
            break;
        case 110:
            $sourah = 'النصر';
            break;
        case 111:
            $sourah = 'المسد';
            break;
        case 112:
            $sourah = 'الاخلاص';
            break;
        case 113:
            $sourah = 'الفلق';
            break;
        case 114:
            $sourah = 'الناس';
            break;
    }
    return "
    <tr>
        <td>" . $atts['number'] . "</td>
        <td>$sourah</td>
        <td><a class='btn btn-success' href='https://dl.qurandl.com/" . $atts['src'] . "'>دانلود</a></td>
        <td><audio src='https://dl.qurandl.com/" . $atts['src'] . "' controls preload='none' style='width:100%; max-width: 600px;'></audio></td>
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

