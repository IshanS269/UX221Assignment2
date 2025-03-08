<?php
/**
 * elite-soccer-club Theme Customizer.
 *
 * @package elite-soccer-club
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elite_soccer_club_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';	
}
add_action( 'customize_register', 'elite_soccer_club_customize_register' );

if ( ! defined( 'ELITE_SOCCER_CLUB_SHOP_BUY_NOW_1' ) ) {
define('ELITE_SOCCER_CLUB_SHOP_BUY_NOW_1',__('https://www.mishkatwp.com/themes/soccer-club-wordpress-theme/','elite-soccer-club'));
}

if ( class_exists("Kirki")){

	/* Single Post Options */

	new \Kirki\Section(
		'elite_soccer_club_single_post_options',
		[
			'title'       => esc_html__( 'Single Post Options', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);
    
    /* Single Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_single_post_heading_on_off',
			'label'       => esc_html__( 'Single Post Heading On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Single Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_single_post_content_on_off',
			'label'       => esc_html__( 'Single Post Content On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Single Post Meta Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_single_meta_on_off',
			'label'       => esc_html__( 'Single Post Meta On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Single Post Feature Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_single_post_image_on_off',
			'label'       => esc_html__( 'Single Post Feature Image On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Single Post Pagination Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_single_post_pagination_on_off',
			'label'       => esc_html__( 'Single Post Pagination On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Page Options */
		new \Kirki\Section(
		'elite_soccer_club_single_page_options',
		[
			'title'       => esc_html__( 'Page Sidebar Options', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio(
	[
		'settings'    => 'elite_soccer_club_single_page_sidebar_option',
		'label'       => esc_html__( 'Page Sidebar Settings', 'elite-soccer-club' ),
		'section'     => 'elite_soccer_club_single_page_options',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => [
			'right'   => esc_html__( 'Page With Right Sidebar', 'elite-soccer-club' ),
			'left' => esc_html__( 'Page With Left Sidebar', 'elite-soccer-club' ),
			'none'  => esc_html__( 'Page With No Sidebar', 'elite-soccer-club' ),

		],
	]
);
	/* Page Options End*/

	/* Post Options */

	new \Kirki\Section(
		'elite_soccer_club_post_options',
		[
			'title'       => esc_html__( 'Post Options', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);
    
    /* Post Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_image_on_off',
			'label'       => esc_html__( 'Post Image On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_heading_on_off',
			'label'       => esc_html__( 'Post Heading On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_content_on_off',
			'label'       => esc_html__( 'Post Content On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Date Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_date_on_off',
			'label'       => esc_html__( 'Post Date On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Comments Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_comment_on_off',
			'label'       => esc_html__( 'Post Comments On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Author Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_author_on_off',
			'label'       => esc_html__( 'Post Author On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post Categories Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_post_categories_on_off',
			'label'       => esc_html__( 'Post Categories On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Post limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'elite_soccer_club_post_content_limit',
			'label'       => esc_html__( 'Post Content Limit', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_options',
			'default'     => 15,
			'choices'     => [
				'min'  => 0,
				'max'  => 50,
				'step' => 1,
			],
		]
	);

	/* Post Options End */

	/* Post Options */

	new \Kirki\Section(
		'elite_soccer_club_post_layouts_section',
		[
			'title'       => esc_html__( 'Post Layout Options', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio_Image(
		[
			'settings'    => 'elite_soccer_club_post_layout',
			'label'       => esc_html__( 'Blog Layout', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_post_layouts_section',
			'default'     => 'two_column_right',
			'priority'    => 10,
			'choices'     => [
				'one_column'   => get_template_directory_uri().'/images/1column.png',
				'two_column_right' => get_template_directory_uri().'/images/right-sidebar.png',
				'two_column_left'  => get_template_directory_uri().'/images/left-sidebar.png',
				'three_column'  => get_template_directory_uri().'/images/3column.png',
				'four_column'  => get_template_directory_uri().'/images/4column.png',
				'grid_post'  => get_template_directory_uri().'/images/grid.png',
			],
		]
	);

	/* Post Options End */

	/* 404 Page */

	new \Kirki\Section(
		'elite_soccer_club_404_page_section',
		[
			'title'       => esc_html__( '404 Page', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can add 404 Page information.', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_soccer_club_404_page_heading',
			'label'    => esc_html__( 'Add Heading', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_404_page_section',
			'default'  => esc_html__( '404', 'elite-soccer-club' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_soccer_club_404_page_content',
			'label'    => esc_html__( 'Add Content', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_404_page_section',
			'default'  => esc_html__( 'Ops! Something happened...', 'elite-soccer-club' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_soccer_club_404_page_button',
			'label'    => esc_html__( 'Add Button', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_404_page_section',
			'default'  => esc_html__( 'Home', 'elite-soccer-club' ),
			'priority' => 10,
		]
	);

	/* 404 Page End */

	/* General Options */

	new \Kirki\Section(
		'elite_soccer_club_general_options_section',
		[
			'title'       => esc_html__( 'General Options', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_sticky_header_setting',
			'label'       => esc_html__( 'Show Hide Sticky Header', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_general_options_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_preloader_setting',
			'label'       => esc_html__( 'Preloader On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_general_options_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_scroll_to_top_setting',
			'label'       => esc_html__( 'Scroll To Top On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_general_options_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* General Options End */

	/* Logo */

	/* Logo Size limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'elite_soccer_club_logo_resizer_setting',
			'label'       => esc_html__( 'Logo Size Limit', 'elite-soccer-club' ),
			'section'     => 'title_tagline',
			'default'     => 70,
			'choices'     => [
				'min'  => 10,
				'max'  => 300,
				'step' => 10,
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_site_title_setting',
			'label'       => esc_html__( 'Site Title On / Off', 'elite-soccer-club' ),
			'section'     => 'title_tagline',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_tagline_setting',
			'label'       => esc_html__( 'Tagline On / Off', 'elite-soccer-club' ),
			'section'     => 'title_tagline',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	/* Logo End */

	/* Typography Section */

	new \Kirki\Section(
		'elite_soccer_club_theme_typography_section',
		[
			'title'       => esc_html__( 'Theme Typography', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can customize Heading or other body text font settings', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elite_soccer_club_all_headings_typography',
		'section'     => 'elite_soccer_club_theme_typography_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'elite-soccer-club' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'elite_soccer_club_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'elite-soccer-club' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'elite-soccer-club' ),
		'section'     => 'elite_soccer_club_theme_typography_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elite_soccer_club_body_content_typography',
		'section'     => 'elite_soccer_club_theme_typography_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'elite-soccer-club' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'elite_soccer_club_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'elite-soccer-club' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'elite-soccer-club' ),
		'section'     => 'elite_soccer_club_theme_typography_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

    /* End Typography */

        /* Woocommerce Section */

	new \Kirki\Section(
		'elite_soccer_club_theme_product_sidebar',
		[
			'title'       => esc_html__( 'Woocommerce Sidebars', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can change woocommerce sidebar', 'elite-soccer-club' ),
			'panel' =>'woocommerce',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'elite_soccer_club_product_sidebar_position',
			'label'       => esc_html__( 'Sidebar Option', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_theme_product_sidebar',
			'default'     => 'right',
			'choices'     => [
				'left' => esc_html__( 'Left Sidebar', 'elite-soccer-club' ),
				'right' => esc_html__( 'Right Sidebar', 'elite-soccer-club' ),
				'none' => esc_html__( 'No Sidebar', 'elite-soccer-club' ),
			],
		]
	);

    /* Woocommerce Section End */

    /* Global Color Section */

	new \Kirki\Section(
		'elite_soccer_club_theme_color_section',
		[
			'title'       => esc_html__( 'Theme Colors Option', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can change your theme color', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'elite_soccer_club_theme_color_1',
		'label'       => __( 'Select Your First Color', 'elite-soccer-club' ),
		'section'     => 'elite_soccer_club_theme_color_section',
		'default'     => '#D90A2C',
	] );

       /* Global Color End */

    /* Breadcrumb Section */

	new \Kirki\Section(
		'elite_soccer_club_breadcrumb_section',
		[
			'title'       => esc_html__( 'Theme Breadcrumb Option', 'elite-soccer-club' ),
			'description' => esc_html__( 'The breadcrumbs for your theme can be included here.', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_breadcrumb_setting',
			'label'       => esc_html__( 'Enable Breadcrumbs Option', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_breadcrumb_section',
			'default'     => true,
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);


    /* Breadcrumb section End */

    /* Social Icon */

	new \Kirki\Section(
		'elite_soccer_club_top_header_section',
		[
			'title'       => esc_html__( 'Header Social Icon', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can add social links.', 'elite-soccer-club' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_top_twitter_link',
			'label'    => esc_html__( 'Add Twitter Link', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_top_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_top_linkdin_link',
			'label'    => esc_html__( 'Add Linkdin Link', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_top_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_top_youtube_link',
			'label'    => esc_html__( 'Add Youtube Link', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_top_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_top_facebook_link',
			'label'    => esc_html__( 'Add Facebook Link', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_top_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_top_instagram_link',
			'label'    => esc_html__( 'Add Instagram Link', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_top_header_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	//Home page Setting Panel
	new \Kirki\Panel(
		'elite_soccer_club_home_page_section',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Home Page Sections', 'elite-soccer-club' ),
		]
	);

	/* Header */

	new \Kirki\Section(
		'elite_soccer_club_header_button_section',
		[
			'title'       => esc_html__( 'Header', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can add header button text and link.', 'elite-soccer-club' ),
			'panel'		  => 'elite_soccer_club_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_soccer_club_header_button_text',
			'label'    => esc_html__( 'Add Button Text', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_soccer_club_header_button_link',
			'label'    => esc_html__( 'Add Button URl', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	/* Home Slider */

	new \Kirki\Section(
		'elite_soccer_club_home_slider_section',
		[
			'title'       => esc_html__( 'Home Slider', 'elite-soccer-club' ),
			'description' => esc_html__( 'Here you can add slider image, title and text.', 'elite-soccer-club' ),
			'panel'		  => 'elite_soccer_club_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_slide_on_off',
			'label'       => esc_html__( 'Slider On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_home_slider_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'elite_soccer_club_slide_count',
			'label'    => esc_html__( 'Slider Number Control', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_home_slider_section',
			'default'  => '',
			'choices'  => [
				'min'  => 1,
				'max'  => 3	,
				'step' => 1,
			],
		]
	);

	$elite_soccer_club_slide_count = get_theme_mod('elite_soccer_club_slide_count');

	for ($i=1; $i <= $elite_soccer_club_slide_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'elite_soccer_club_slider_image'.$i,
				'label'       => esc_html__( 'Slider Image 0', 'elite-soccer-club' ).$i,
				'section'     => 'elite_soccer_club_home_slider_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_soccer_club_slider_short_heading'.$i,
				'label'    => esc_html__( 'Short Heading 0', 'elite-soccer-club' ).$i,
				'section'  => 'elite_soccer_club_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_soccer_club_slider_main_heading' .$i,
				'label'    => esc_html__( 'Slider Main Heading ', 'elite-soccer-club' ).$i,
				'section'  => 'elite_soccer_club_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_soccer_club_slider_content'.$i,
				'label'    => esc_html__( 'Slider Content ', 'elite-soccer-club' ).$i,
				'section'  => 'elite_soccer_club_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_soccer_club_slider_button_text'.$i,
				'label'    => esc_html__( 'Slider Button Text ', 'elite-soccer-club' ).$i,
				'section'  => 'elite_soccer_club_home_slider_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'elite_soccer_club_slider_button_link'.$i,
				'label'    => esc_html__( 'Slider Button Url ', 'elite-soccer-club' ).$i,
				'section'  => 'elite_soccer_club_home_slider_section',
				'default'  => '',
			]
		);

	}

	new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_number_1',
            'label'    => esc_html__( 'Slider Counter Number 1 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_text_1',
            'label'    => esc_html__( 'Slider Counter Text 1 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_number_2',
            'label'    => esc_html__( 'Slider Counter Number 2 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_text_2',
            'label'    => esc_html__( 'Slider Counter Text 2', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_number_3',
            'label'    => esc_html__( 'Slider Counter Number 3 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_counter_text_3',
            'label'    => esc_html__( 'Slider Counter Text 3', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_short_heading',
            'label'    => esc_html__( 'Match Short Heading', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_heading',
            'label'    => esc_html__( 'Match Heading ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'elite_soccer_club_slider_latest_match_left_logo_image',
            'label'       => esc_html__( 'Team 1 Logo', 'elite-soccer-club' ) ,
            'section'     => 'elite_soccer_club_home_slider_section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_sccore_number_left',
            'label'    => esc_html__( 'Team 1 Score', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'elite_soccer_club_slider_latest_match_right_logo_image',
            'label'       => esc_html__( 'Team 2 Logo', 'elite-soccer-club' ) ,
            'section'     => 'elite_soccer_club_home_slider_section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_sccore_number_right',
            'label'    => esc_html__( 'Team 2 Score ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_stadium_name',
            'label'    => esc_html__( 'Match Stadium Name ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_slider_latest_match_date_and_time',
            'label'    => esc_html__( 'Matches Date and Time', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_slider_section',
        ]
    );

	/* Home our Cause */

	new \Kirki\Section(
	    'elite_soccer_club_home_industry_heroes_section',
	    [
	        'title'       => esc_html__( 'Why Join Us', 'elite-soccer-club' ),
	        'description' => esc_html__( 'Here you can add Why Join Us related text to display Why Join Us.', 'elite-soccer-club' ),
	        'panel'       => 'elite_soccer_club_home_page_section',
	        'priority'    => 30,
	    ]
	);

	new \Kirki\Field\Checkbox_Switch(
	    [
	        'settings'    => 'elite_soccer_club_why_join_us_on_off',
	        'label'       => esc_html__( 'Why Join Us On / Off', 'elite-soccer-club' ),
	        'section'     => 'elite_soccer_club_home_industry_heroes_section',
	        'default'     => 'off',
	        'choices'     => [
	            'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
	            'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
	        ],
	    ]
	);

	new \Kirki\Field\Text(
	    [
	        'settings' => 'elite_soccer_club_why_join_us_short_heading',
	        'label'    => esc_html__( 'Short Heading', 'elite-soccer-club' ),
	        'section'  => 'elite_soccer_club_home_industry_heroes_section',
	    ]
	);

	new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_heading',
            'label'    => esc_html__( 'Main Heading', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_content',
            'label'    => esc_html__( 'Content ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_number_1',
            'label'    => esc_html__( 'Counter Number 1 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_text_1',
            'label'    => esc_html__( 'Counter Text 1 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_number_2',
            'label'    => esc_html__( 'Counter Number 2 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_text_2',
            'label'    => esc_html__( 'Counter Text 2', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_number_3',
            'label'    => esc_html__( 'Counter Number 3 ', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'elite_soccer_club_industry_why_join_us_counter_text_3',
            'label'    => esc_html__( 'Counter Text 3', 'elite-soccer-club' ) ,
            'section'  => 'elite_soccer_club_home_industry_heroes_section',
            'default'  => '',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'elite_soccer_club_why_join_us_image',
            'label'       => esc_html__( 'Why Join Us Image', 'elite-soccer-club' ) ,
            'section'     => 'elite_soccer_club_home_industry_heroes_section',
            'default'     => '',
        ]
    );


	/* Footer */

	new \Kirki\Section(
		'elite_soccer_club_footer_section',
		[
			'title'       => esc_html__( 'Footer', 'elite-soccer-club' ),
			'panel'		  => 'elite_soccer_club_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_footer_widgets_on_off',
			'label'       => esc_html__( 'Footer Widgets On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_soccer_club_copyright_on_off',
			'label'       => esc_html__( 'Footer Copyright On / Off', 'elite-soccer-club' ),
			'section'     => 'elite_soccer_club_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-soccer-club' ),
				'off' => esc_html__( 'Disable', 'elite-soccer-club' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_soccer_club_copyright_content_text',
			'label'    => esc_html__( 'Copyright Text', 'elite-soccer-club' ),
			'section'  => 'elite_soccer_club_footer_section',
		]
	);

}

function elite_soccer_club_customizer_settings( $wp_customize ) {

	$elite_soccer_club_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );

	$categories = get_categories($elite_soccer_club_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('elite_soccer_club_featured_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'elite_soccer_club_sanitize_select',
	));

	$wp_customize->add_control('elite_soccer_club_featured_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','elite-soccer-club'),
		'section' => 'elite_soccer_club_home_product_section',
	));

}

add_action( 'customize_register', 'elite_soccer_club_customizer_settings' );