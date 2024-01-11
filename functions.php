<?php
/**
 *  functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'adidas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function adidas_setup() {
		load_theme_textdomain( 'adidas', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'adidas' ),
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
				'pawsgang_custom_background_args',
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
add_action( 'after_setup_theme', 'adidas_setup' );

function add_top_bar_notification() {
    $top_bar_enabled =get_option('enable_top_bar_notification', false);

    if ($top_bar_enabled) {
        $notification_text = get_option('top_bar_notification_text', 'This is a top bar notification. Change it in theme options.');
        $notification_link_text = get_option('notification_link_text', 'Read more');
        $notification_link_url = get_option('notification_link_url', '#');
        $show_close_icon = get_option('show_close_icon', true);

        echo '<div class="top-bar-notification">';
        echo '<span>' . wp_kses_post($notification_text) . '</span>';

        if ($notification_link_text && $notification_link_url) {
            echo '<a href="' . esc_url($notification_link_url) . '" class="notification-link">' . esc_html($notification_link_text) . '</a>';
        }
        if ($show_close_icon) {
            echo '<img src="http://adidas-theme.local/wp-content/uploads/2024/01/x-mark.png" alt="Close" class="close-icon">';
        }

        echo '</div>';
    }
}
add_action('wp_head', 'add_top_bar_notification');



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function register_secondary_menu() {
    register_nav_menu('secondary-menu', __('Secondary Menu'));
}
add_action('after_setup_theme', 'register_secondary_menu');

function adidas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'adidas_content_width', 640 );
}
add_action( 'after_setup_theme', 'adidas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function adidas_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'adidas' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'adidas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'adidas_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function adidas_scripts() {
	wp_enqueue_style( 'adidas-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'adidas-main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css');
	wp_style_add_data( 'adidas-style', 'rtl', 'replace' );
	wp_enqueue_script( 'adidas-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'adidas-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adidas_scripts' );
function enqueue_custom_styles() {
    // Enqueue Owl Carousel theme stylesheet
    wp_enqueue_style('owl-carousel-default', get_template_directory_uri() . '/assets/css/owl.carousel.theme.default.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
// Enqueue Owl Carousel stylesheet
function enqueue_owl_carousel_styles() {
    wp_enqueue_style('owl-carousel', '/assets/css/owl.carousel.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel_styles');


function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function enqueue_media_uploader() {
    wp_enqueue_media();
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/assets/js/custom-admin.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader');



/**
 * Custom Fonts
 * font-family: 'Nunito', sans-serif;
*/
// Enqueue Swiper CSS
function enqueue_swiper_styles() {
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_styles');



function enqueue_custom_fonts() {
	if(!is_admin()) {
		wp_register_style('source_sans_pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,600&display=swap');
		wp_register_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

		wp_enqueue_style('source_sans_pro');
		wp_enqueue_style('nunito');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');


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
 * Footer Widget One
*/
function custom_footer_widget_one() {
	$args = array(
		'id' 							=> 'footer-widget-col-one',
		'name'						=> __('Footer Column One', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_one');
function custom_header_widget() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Header Widget Area', 'text_domain' ),
            'id'            => 'header-widget-area',
            'description'   => esc_html__( 'Widget area for the header.', 'text_domain' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'custom_header_widget' );
function create_slider_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Slider',
            'singular_name' => 'Slider Item'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2', // Choose an icon
        'supports' => array('title', 'thumbnail', 'editor'),
        'rewrite' => array('slug' => 'slider')
    );
    register_post_type('slider', $args);
}
add_action('init', 'create_slider_post_type');
/*function create_event_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Events',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        // Add other parameters as needed
    );
    register_post_type('events', $args);
}
add_action('init', 'create_event_post_type'); */

function theme_customize_register($wp_customize) {
    // Create a section for Slider Settings
    $wp_customize->add_section('slider_settings', array(
        'title' => __('Slider Settings', 'your-theme'),
        'priority' => 30,
    ));

    // Slider Image (for fixed background)
    $wp_customize->add_setting('slider_image_1', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_1', array(
        'label' => __('Slider Image (Fixed Background)', 'your-theme'),
        'section' => 'slider_settings',
        'settings' => 'slider_image_1',
    )));

    // Loop to create settings for sliding content
    for ($i = 1; $i <= 3; $i++) {
        // Second Image
        $wp_customize->add_setting('second_image_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_image_' . $i, array(
            'label' => __('Second Image', 'your-theme') . ' ' . $i,
            'section' => 'slider_settings',
            'settings' => 'second_image_' . $i,
        )));

        // Slider Header Text
        $wp_customize->add_setting('slider_header_' . $i, array(
            'default' => 'Default Slider Header',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('slider_header_' . $i, array(
            'label' => __('Slider Header', 'your-theme') . ' ' . $i,
            'section' => 'slider_settings',
            'type' => 'text',
        ));

        // Slider Text
        $wp_customize->add_setting('slider_text_' . $i, array(
            'default' => 'Default Slider Text',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('slider_text_' . $i, array(
            'label' => __('Slider Text', 'your-theme') . ' ' . $i,
            'section' => 'slider_settings',
            'type' => 'textarea',
        ));

        // Link URL
        $wp_customize->add_setting('link_url_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('link_url_' . $i, array(
            'label' => __('Link URL', 'your-theme') . ' ' . $i,
            'section' => 'slider_settings',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'theme_customize_register');
// Function to add theme options menu item in admin dashboard

function custom_theme_options($wp_customize) {
    // Top Bar Notification Section
    $wp_customize->add_section('top_bar_notification_section', array(
        'title' => __('Top Bar Notification', 'text-domain'),
        'priority' => 30,
    ));

    // Enable/Disable Top Bar Notification
    $wp_customize->add_setting('enable_top_bar_notification', array(
        'default' => false,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('enable_top_bar_notification', array(
        'label' => __('Enable Top Bar Notification', 'text-domain'),
        'type' => 'checkbox',
        'section' => 'top_bar_notification_section',
    ));

    // Top Bar Notification Text
    $wp_customize->add_setting('top_bar_notification_text', array(
        'default' => 'This is a top bar notification. Change it in theme options.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('top_bar_notification_text', array(
        'label' => __('Notification Text', 'your-theme-text-domain'),
        'type' => 'textarea',
        'section' => 'top_bar_notification_section',
    ));

    // Notification Link Text
    $wp_customize->add_setting('notification_link_text', array(
        'default' => 'Read more',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('notification_link_text', array(
        'label' => __('Notification Link Text', 'your-theme-text-domain'),
        'type' => 'text',
        'section' => 'top_bar_notification_section',
    ));

    $wp_customize->add_setting('notification_link_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('notification_link_url', array(
        'label' => __('Notification Link URL', 'your-theme-text-domain'),
        'type' => 'url',
        'section' => 'top_bar_notification_section',
    ));

    // Show/Hide Close Icon
    $wp_customize->add_setting('show_close_icon', array(
        'default' => true,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('show_close_icon', array(
        'label' => __('Show Close Icon', 'your-theme-text-domain'),
        'type' => 'checkbox',
        'section' => 'top_bar_notification_section',
    ));
}

add_action('customize_register', 'custom_theme_options');
include_once get_template_directory() . '/inc/theme-options.php';