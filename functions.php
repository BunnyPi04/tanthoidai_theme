<?php
/**
 * wp_education functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_education
 */
@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

// if (!function_exists('tanthoidai_setup')) : //educationpress_education_setup
// /**
//  * Sets up theme defaults and registers support for various WordPress features.
//  *
//  * Note that this function is hooked into the after_setup_theme hook, which
//  * runs before the init hook. The init hook is too late for some features, such
//  * as indicating support for post thumbnails.
//  */
// function tanthoidai_setup() { //educationpress_education_setup
//     /*
//      * Make theme available for translation.
//      * Translations can be filed in the /languages/ directory.
//      * If you're building a theme based on wp_education, use a find and replace
//      * to change 'wp-education' to the name of your theme in all the template files.
//      */
//     load_theme_textdomain('wp-tanthoidai', get_template_directory() . '/languages'); //wp-education

//     // Add default posts and comments RSS feed links to head.
//     add_theme_support('automatic-feed-links');

//     /*
//      * Let WordPress manage the document title.
//      * By adding theme support, we declare that this theme does not use a
//      * hard-coded <title> tag in the document head, and expect WordPress to
//      * provide it for us.
//      */
//     add_theme_support('title-tag');

//     /*
//      * Enable support for Post Thumbnails on posts and pages.
//      *
//      * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
//      */
//     add_theme_support('post-thumbnails');

//     /*
//      * Adding Images size.
//      *
//      * @link https://developer.wordpress.org/reference/functions/add_image_size/
//      */
//     add_image_size('educationpress-course-thumb', 420, 300, true);
//     add_image_size('educationpress-course-slider', 1920, 600, true);
//     add_image_size('educationpress-course-thumb-small', 100, 100, true);
//     add_image_size('educationpress-testimonial-thumb', 140, 140, true);
//     add_image_size('educationpress-article-thumb', cs_get_option('feature_image_width', 870), cs_get_option('feature_image_height', 580), true);

//     // This theme uses wp_nav_menu() in one location.
//     register_nav_menus( array(
//         'primary'       => esc_html__('Primary', 'wp-tanthoidai'), //wp-education
//         'footer'        => esc_html__('Footer', 'wp-tanthoidai'), //wp-education
//     ));

//     /*
//      * Switch default core markup for search form, comment form, and comments
//      * to output valid HTML5.
//      */
//     add_theme_support('html5', array(
//         'search-form',
//         'comment-form',
//         'comment-list',
//         'gallery',
//         'caption',
//     ));

//     /*
//      * Enable support for Custom Logo.
//      * See https://codex.wordpress.org/Theme_Logo
//      */
//     add_theme_support('custom-logo', array(
//         'height'      => 58,
//         'width'       => 160,
//         'flex-height' => true,
//         'flex-width'  => true,
//         'header-text' => array('site-title', 'site-description'),
//     ));


//     add_theme_support('widget-customizer');

//     // add_theme_support('woocommerce');

//     /**
//      * Gutenberg Support
//      */
    
//     // Adding support for core block visual styles.
//     add_theme_support('wp-block-styles');

//     // Add support for full and wide align images.
//     add_theme_support('align-wide');

//     // Add support for custom color scheme.
//     add_theme_support('editor-color-palette', array(
//         array(
//             'name'  => esc_html__('Strong Blue', 'wp-tanthoidai'), //wp-education
//             'slug'  => 'strong-blue',
//             'color' => '#25c1e7',
//         ),
//         array(
//             'name'  => esc_html__('Dark Blue', 'wp-tanthoidai'), //wp-education
//             'slug'  => 'dark-blue',
//             'color' => '#14a4c7',
//         ),
//         array(
//             'name'  => esc_html__('Lighter Blue', 'wp-tanthoidai'), //wp-education
//             'slug'  => 'lighter-blue',
//             'color' => 'rgba(51, 204, 255, 0.1)',
//         ),
//         array(
//             'name'  => esc_html__('Pure White', 'wp-tanthoidai'), //wp-education
//             'slug'  => 'pure-white',
//             'color' => '#ffffff',
//         )
//     ));
// }
// endif;
// add_action('after_setup_theme', 'tanthoidai_setup'); //educationpress_education_setup

// if (!function_exists( 'educationpress_education_content_width')):
// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */

// function educationpress_education_content_width() {
//     $GLOBALS['content_width'] = apply_filters( 'educationpress_education_content_width', 640 );
// }
// endif;
// add_action( 'after_setup_theme', 'educationpress_education_content_width', 0 );


// if (!function_exists('tanthoidai_widgets_init')): //educationpress_education_widgets_init
// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function tanthoidai_widgets_init() { //educationpress_education_widgets_init
//     register_sidebar(array(
//         'name'          => esc_html__('Blog Sidebar', 'wp-tanthoidai'), //wp-education
//         'id'            => 'sidebar-1',
//         'description'   => esc_html__('Add widgets here. It will be shown to the blog pages.', 'wp-tanthoidai'), //wp-education
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</section>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ) );
//     register_sidebar(array(
//         'name'          => esc_html__('Course Sidebar', 'wp-tanthoidai'), //wp-education
//         'id'            => 'course',
//         'description'   => esc_html__('Add widgets here. It will be shown to the course page.', 'wp-tanthoidai'), //wp-education
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</section>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ));
//     register_sidebar(array(
//         'name'          => esc_html__('Single Course Sidebar', 'wp-tanthoidai' ), //wp-education
//         'id'            => 'single_course',
//         'description'   => esc_html__('Add widgets here. It will be shown to the single course page.', 'wp-tanthoidai'), //wp-education
//         'before_widget' => '<section id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</section>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ));
//     register_sidebar(array(
//         'name'          => esc_html__('Footer Widgets', 'wp-tanthoidai'), //wp-education
//         'id'            => 'footer-widgets',
//         'description'   => esc_html__('Add widgets here. It will be shown to the footer area.', 'wp-tanthoidai'), //wp-education
//         'before_widget' => '<div id="%1$s" class="col-md-'. esc_attr( cs_get_option( 'footer_widget_column', 4 ) ) .' col-sm-6 col-xs-12 widget %2$s">',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h4 class="widget-title footer-widget-title">',
//         'after_title'   => '</h4>',
//     ));
// }
// endif;
// add_action('widgets_init', 'tanthoidai_widgets_init'); //educationpress_education_widgets_init


if (!function_exists('tanthoidai_scripts')): //educationpress_education_scripts
/**
 * Enqueue scripts and styles.
 */
function tanthoidai_scripts() { //educationpress_education_scripts
    wp_enqueue_style('tanthoidai-style', get_stylesheet_uri()); //educationpress-style
    // wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), '3.3.6' );
    // wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.3' );
    // wp_enqueue_style( 'font-awesoume', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.6.3' );
    // wp_register_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.min.css', array(), '1.0' );
    // wp_register_style( 'devicon-icons', get_template_directory_uri() . '/assets/css/devicon.min.css', array(), '1.0' );
    // wp_register_style( 'education-icon-collection', get_template_directory_uri() . '/assets/css/education-icon-collection.min.css', array(), '1.0' );
    // wp_enqueue_style( 'educationpress-main-style', get_template_directory_uri() . '/css/main.css', array(), '1.0' );
    // wp_enqueue_style( 'educationpress-color', get_template_directory_uri() . '/css/color.css', array(), '1.0' );
    wp_enqueue_style('tanthoidai-style-custom', get_template_directory_uri() . '/style.css', array(), '1.0' );

    // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    // wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.4', true );
    // wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '1.3.1', true );
    // wp_register_script( 'educationpress-navgoco', get_template_directory_uri() . '/js/jquery.navgoco.min.js', array('jquery'), '1.0', true );
    // wp_register_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '2.0.3', true );
    // wp_register_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '1.0', true );
    // wp_enqueue_script( 'educationpress-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
    // wp_enqueue_script( 'educationpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
endif;
add_action('wp_enqueue_scripts', 'tanthoidai_scripts'); //educationpress_education_scripts


// if (!function_exists('educationpress_education_admin_scripts')) :
//     /**
//      * Admin Scripts
//      */

//     function educationpress_education_admin_scripts() {

//         wp_enqueue_style('educationpress-admin-style', get_template_directory_uri() . '/admin/assets/css/admin-style.css', array(), '1.0');
//     }
// endif;
// add_action('admin_enqueue_scripts', 'educationpress_education_admin_scripts');

/**
 * Theme custom functions
 */
// require get_template_directory() . '/inc/theme-functions.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Bootstrap Mega Menu Nav Walker
 */
// require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * breadcrumb class
 */
// if ( !function_exists( 'breadcrumb_trail' ) ){
//     require get_template_directory() . '/inc/breadcrumbs.php';
// }

/**
 * Taxonomie mata
 */
// require get_template_directory() . '/inc/ep-taxonomie-meta.php';


/**
 * TGM Plugin installer
 */
// require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Theme Custom Widgets
 */
// require get_template_directory() . '/inc/ep_widgets.php';
