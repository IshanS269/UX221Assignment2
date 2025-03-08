<?php
if ( ! function_exists( 'elite_soccer_club_setup' ) ) :
function elite_soccer_club_setup() {

	add_theme_support( "woocommerce" );	

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( "responsive-embeds" );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	
	add_theme_support( 'custom-header' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'elite-soccer-club' ),
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
	
	/*
	 * Enable support for custom logo.
	 */
	add_theme_support('custom-logo');

	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
		
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
		
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css' ) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'elite_soccer_club_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	load_theme_textdomain( 'elite-soccer-club', get_stylesheet_directory() . '/languages' );
}
endif;
add_action( 'after_setup_theme', 'elite_soccer_club_setup' );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elite_soccer_club_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elite_soccer_club_content_width', 1170 );
}
add_action( 'after_setup_theme', 'elite_soccer_club_content_width', 0 );

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'elite_soccer_club_loop_columns', 999);
if (!function_exists('elite_soccer_club_loop_columns')) {
	function elite_soccer_club_loop_columns() {
		return 3; // 3 products per row
	}
}

function elite_soccer_club_customize_remove_register() {
    global $wp_customize;

    $wp_customize->remove_setting( 'display_header_text' );
    $wp_customize->remove_control( 'display_header_text' );
    
}
add_action( 'customize_register', 'elite_soccer_club_customize_remove_register', 11 );

/**
 * Admin notice function.
 */
require_once get_template_directory() . '/inc/admin-notice/admin.php';

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';

/**
 * Load Web Font
 */
require_once get_template_directory() . '/inc/wptt-webfont-loader.php';

/**
 * Load Recommended Plugin
 */
require_once get_template_directory() . '/inc/tgm-plugin/tgm.php';

/**
 * Called all the Customize file.
 */
require( get_template_directory() . '/inc/customize/premium.php');

/**
 * Get Started.
 */
require( get_template_directory() . '/inc/started/main.php');

/* 
* Logo Resizer
*/
function elite_soccer_club_logo_resizer_setting() {

    $elite_soccer_club_theme_logo_size_css = '';
    $elite_soccer_club_logo_resizer_setting = get_theme_mod('elite_soccer_club_logo_resizer_setting');

	$elite_soccer_club_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($elite_soccer_club_logo_resizer_setting).'px !important;
			width: '.esc_attr($elite_soccer_club_logo_resizer_setting).'px !important;
		}
	';
    wp_add_inline_style( 'elite-soccer-club-style',$elite_soccer_club_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'elite_soccer_club_logo_resizer_setting' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function elite_soccer_club_global_color() {

    $elite_soccer_club_theme_color_css = '';
    $elite_soccer_club_theme_color_1 = get_theme_mod('elite_soccer_club_theme_color_1');

    $elite_soccer_club_theme_color_css = '
        a.lower-icons i,.line-1,.line-2,span.post-page-numbers.current span,span.onsale,.pro-button a,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt ,.woocommerce a.added_to_cart.wc-forward,.pro-button a:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce ul.products li.product .onsale,.woocommerce span.onsale,.woocommerce .woocommerce-ordering select,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.wc-block-cart__submit-container,#home_project .box-image span,.elite-soccer-club-btn .posts-navigation .nav-links a,.widget_search form.search-form .search-submit,.paginations a:hover, .paginations a:focus, .paginations a.active, span.page-numbers.current,.pagination a,.animate-border,a.login_button:hover,a.register_button:hover,.blog-post .post-thumb,button, input[type="button"], input[type="reset"], input[type="submit"],#footer-copyright,.slider_content_box h5,.slider_button a.video_tl i,#featured-product span.onsale, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale,#featured-product .box-content a.added_to_cart.wc-forward,#blog-content .featured-img, #service-page .featured-img, #skip-content .featured-img,.nav-previous, .nav-next {
            background: ' . esc_attr($elite_soccer_club_theme_color_1) . ';
        }
        #featured-product button.owl-prev,#featured-product button.owl-next {
            background: ' . esc_attr($elite_soccer_club_theme_color_1) . '!important;
        }
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .toggle-menu button {
		        background: '.esc_attr($elite_soccer_club_theme_color_1).';
		    }
		}
        a.boxed-btn.btn-white i,.btn,.widget_categories ul li, .widget_archive ul li,#sidebar .widget_categories ul li, #sidebar .widget_archive ul li,.scrollup,.gb_nav_menu .sub-menu {
            background-color: ' . esc_attr($elite_soccer_club_theme_color_1) . ';
        }
        .elite-soccer-club-btn .boxed-btn, .elite-soccer-club-btn .slide-bg h4, .elite-soccer-club-btn .boxed-btn:hover, .elite-soccer-club-btn .boxed-btn:focus, .elite-soccer-club-btn .posts-navigation .nav-links a:hover, .elite-soccer-club-btn .posts-navigation .nav-links a:focus, .sidebar .widget_search button, .wp-block-search .wp-block-search__button, .sidebar .widget table th {
            background-color: ' . esc_attr($elite_soccer_club_theme_color_1) . '!important;
        }
        .woocommerce-message,.woocommerce-info,.wp-block-button.is-style-outline a.wp-block-button__link,#sidebar .widget_categories ul li,#sidebar .widget_archive ul li,.scrollup,.scrollup:hover, .scrollup:focus,a.header_button,.slider_button a.button1,#featured-product .box-content a.button,#featured-product .box .box-content {
            border-color: ' . esc_attr($elite_soccer_club_theme_color_1) . ';
        }
       	a.header_button,.media-links a,a.boxed-btn i, .boxed-btn i,.loader-text,p.price,.woocommerce ul.products li.product .price,.woocommerce div.product p.price,.woocommerce div.product span.price,.woocommerce-message::before,.woocommerce-info::before,.post-comment-area .media,.footer-sidebar .widget ul li a:before,.wp-block-post-terms a:before,.woocommerce ul.products li.product .woocommerce-loop-product__title, #blog-content .post-content h4 a,#blog-content ul.meta-info li a,.post-category i,i.fa.fa-user,#blog-content ul.meta-info li,.sidebar .widget-title, #sidebar .widget.widget_search label, #sidebar .sidebar .widget h2.wp-block-heading, .sidebar h2.wp-block-heading,.sidebar .widget_recent_entries ul li a:hover, .sidebar .widget_recent_comments ul li a:hover, .sidebar .widget_archive ul li a, .sidebar .widget_categories ul li a:hover, .sidebar .widget_meta ul li a:hover, .sidebar .widget_recent_entries ul li a:focus, .sidebar .widget_recent_comments ul li a:focus, .sidebar .widget_archive ul li a:focus, .sidebar .widget_categories ul li a:focus, .sidebar .widget_meta ul li a:focus,.widget_pages ul li a:hover, .widget_pages ul li a:focus,.footer-sidebar .widget_recent_entries ul li a:hover, .footer-sidebar .widget_recent_comments ul li a:hover, .footer-sidebar .widget_archive ul li a:hover, .footer-sidebar .widget_categories ul li a:hover, .footer-sidebar .widget_meta ul li a:hover, .footer-sidebar .widget_recent_entries ul li a:focus, .footer-sidebar .widget_recent_comments ul li a:focus, .footer-sidebar .widget_archive ul li a:focus, .footer-sidebar .widget_categories ul li a:focus, .footer-sidebar .widget_meta ul li a:focus,.site-content a,#blog-content .post-content:hover .post-title a, #recent-blog .post-content .post-title a, .footer-sidebar .widget.widget_products ul li a:hover, .footer-sidebar .widget.widget_products ul li a:focus, .sidebar .widget_info i,.scrollup:hover, .scrollup:focus,.slider_button a.video_tl,#featured-product ins span.woocommerce-Price-amount.amount, p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price,.gb_nav_menu ul li a:active, .gb_nav_menu ul li a:hover,#blog-content ul.meta-info li:focus-within i, #blog-content ul.meta-info li a:focus, #blog-content ul.meta-info li a:hover,#featured-product .box-content a.button{
            color: ' . esc_attr($elite_soccer_club_theme_color_1) . ';
        }
        .site-title, .site-description{
            color: ' . esc_attr($elite_soccer_club_theme_color_1) . '!important;
        }
    ';
    
    wp_add_inline_style('elite-soccer-club-style', $elite_soccer_club_theme_color_css);
    wp_add_inline_style('elite-soccer-club-woocommerce-css', $elite_soccer_club_theme_color_css);

}
add_action('wp_enqueue_scripts', 'elite_soccer_club_global_color');

/**
 * Function that returns if the menu is sticky
 */
if (!function_exists('elite_soccer_club_sticky_header')):
    function elite_soccer_club_sticky_header()
    {
        $elite_soccer_club_is_sticky = get_theme_mod('elite_soccer_club_sticky_header_setting', false);

        if ($elite_soccer_club_is_sticky == false):
            return 'not-sticky';
        else:
            return 'is-sticky-on';
        endif;
    }
endif;

$separator = ' → '; // Define the separator outside

function elite_soccer_club_breadcrumb() {
    global $separator; // Make the separator accessible inside the function

    if (is_home()) {
        echo "<span>Home</span>";
    } else if (!is_home()) {
        echo '<a href="' . home_url() . '">Home</a>' . $separator;

        if (is_archive()) {
            if (is_category()) {
                // If it's a category archive page
                echo "<span>";
                single_cat_title();
                echo "</span>";
            } elseif (is_tag()) {
                // If it's a tag archive page
                echo "<span>";
                single_tag_title();
                echo "</span>";
            } elseif (is_date()) {
                // If it's a date-based archive page
                echo "<span>";
                echo get_the_date('F Y');
                echo "</span>";
            } elseif (is_author()) {
                echo '<span>Author: ';
                the_author();
                echo '</span>';
            } else {
                // For other archive pages
                echo post_type_archive_title() . $separator;
            }
        } elseif (is_single()) {
            // Check if it's a single product (or any custom post type)
            if ('product' === get_post_type()) {
                // WooCommerce product breadcrumb
                echo '<a href="' . get_permalink(wc_get_page_id('shop')) . '">Shop</a>' . $separator;
                echo "<span>";
                the_title();
                echo "</span>";
            } else {
                // For regular posts or categories
                the_category(', ');
                echo $separator; // Add the separator here
                echo "<span>";
                the_title();
                echo "</span>";
            }
        } elseif (is_page()) {
            // For regular pages
            echo "<span>";
            the_title();
            echo "</span>";
        } elseif (is_search()) {
            // Search results
            echo '<span>Search Results for: ' . get_search_query() . '</span>';
        } elseif (is_404()) {
            echo "<span>404</span>";
        } else {
            echo "<span>";
            the_title();
            echo "</span>";
        }
    }
}

