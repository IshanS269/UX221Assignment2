<?php

/**
 * Theme Options Panel.
 *
 * @package Sports Blog
 */

$default = sports_blog_get_default_theme_options();

/*slider and its property section*/
require get_template_directory().'/inc/customizer/top-ticker.php';
require get_template_directory().'/inc/customizer/slider.php';
require get_template_directory().'/inc/customizer/featured-page.php';
require get_template_directory().'/inc/customizer/featured-blog.php';

// Add Theme Options Panel.
$wp_customize->add_panel('theme_option_panel',
	array(
		'title'      => esc_html__('Theme Options', 'sports-blog'),
		'priority'   => 200,
		'capability' => 'edit_theme_options',
	)
);

/*layout management section start */
$wp_customize->add_section('theme_option_section_settings',
	array(
		'title'      => esc_html__('Layout Management', 'sports-blog'),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

/*Home Page Layout*/
$wp_customize->add_setting('enable_overlay_option',
	array(
		'default'           => $default['enable_overlay_option'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control('enable_overlay_option',
	array(
		'label'    => esc_html__('Enable Banner Overlay', 'sports-blog'),
		'section'  => 'theme_option_section_settings',
		'type'     => 'checkbox',
		'priority' => 150,
	)
);


// Cursor Section.
$wp_customize->add_section('cursor_section',
    array(
        'title'      => esc_html__('Cursor Options', 'sports-blog'),
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);

// Setting enable_cursor_option.
$wp_customize->add_setting('enable_cursor_option',
    array(
        'default' => $default['enable_cursor_option'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sports_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_cursor_option',
    array(
        'label' => esc_html__('Enable Custom Cursor', 'sports-blog'),
        'section' => 'cursor_section',
        'type' => 'checkbox',
        'priority' => 100,
    )
);



/*Global Layout*/
$wp_customize->add_setting('global_layout',
	array(
		'default'           => $default['global_layout'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_select',
	)
);
$wp_customize->add_control('global_layout',
	array(
		'label'          => esc_html__('Sidebar Options', 'sports-blog'),
		'section'        => 'theme_option_section_settings',
		'choices'        => array(
			'left-sidebar'  => esc_html__('Left Sidebar', 'sports-blog'),
			'right-sidebar' => esc_html__('Right Sidebar', 'sports-blog'),
			'no-sidebar'    => esc_html__('No Sidebar', 'sports-blog'),
		),
		'type'     => 'select',
		'priority' => 170,
	)
);


/*layout single page section start */
$wp_customize->add_section('theme_option_section_single',
    array(
        'title'      => esc_html__('Single Post Setting', 'sports-blog'),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);

// Setting - related_post.
$wp_customize->add_setting('related_post',
    array(
        'default'           => $default['related_post'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sports_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('related_post',
    array(
        'label'    => esc_html__('Enable Related Post on Single post', 'sports-blog'),
        'section'  => 'theme_option_section_single',
        'type'     => 'checkbox',
        'priority' => 100,
    )
);
// Setting related_post_title.
$wp_customize->add_setting('related_post_title',
    array(
        'default'           => $default['related_post_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('related_post_title',
    array(
        'label'    => esc_html__('Related Post Title', 'sports-blog'),
        'section'  => 'theme_option_section_single',
        'type'     => 'text',
        'priority' => 100,
    )
);

// Setting - read_more_button_text.
$wp_customize->add_setting('read_more_button_text',
	array(
		'default'           => $default['read_more_button_text'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control('read_more_button_text',
	array(
		'label'    => esc_html__('Button Text for Read More', 'sports-blog'),
		'section'  => 'theme_option_section_settings',
		'type'     => 'text',
		'priority' => 170,
	)
);

/*content excerpt in global*/
$wp_customize->add_setting('excerpt_length_global',
	array(
		'default'           => $default['excerpt_length_global'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_positive_integer',
	)
);
$wp_customize->add_control('excerpt_length_global',
	array(
		'label'       => esc_html__('Archive Excerpt Length', 'sports-blog'),
		'section'     => 'theme_option_section_settings',
		'type'        => 'number',
		'priority'    => 175,
		'input_attrs' => array('min' => 1, 'max' => 200, 'style' => 'width: 150px;'),

	)
);

$wp_customize->add_section('single_pagination_section',
    array(
        'title'      => esc_html__('Single Options', 'sports-blog'),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
        'panel'      => 'theme_option_panel',
    )
);

$wp_customize->add_setting('ed_floating_next_previous_nav',
    array(
        'default' => $default['ed_floating_next_previous_nav'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sports_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('ed_floating_next_previous_nav',
    array(
        'label' => esc_html__('Enable Floating Next/Previous Article', 'sports-blog'),
        'section' => 'single_pagination_section',
        'type' => 'checkbox',
    )
);

// Pagination Section.
$wp_customize->add_section('pagination_section',
	array(
		'title'      => esc_html__('Pagination Options', 'sports-blog'),
		'priority'   => 110,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting pagination_type.
$wp_customize->add_setting('pagination_type',
	array(
		'default'           => $default['pagination_type'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_select',
	)
);
$wp_customize->add_control('pagination_type',
	array(
		'label'    => esc_html__('Pagination Type', 'sports-blog'),
		'section'  => 'pagination_section',
		'type'     => 'select',
		'choices'  => array(
			'numeric' => esc_html__('Numeric', 'sports-blog'),
			'default' => esc_html__('Default (Older / Newer Post)', 'sports-blog'),
		),
		'priority' => 100,
	)
);

// Preloader Section.
$wp_customize->add_section('preloader_option',
	array(
		'title'      => esc_html__('Preloader Options', 'sports-blog'),
		'priority'   => 130,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting enable_preloader.
$wp_customize->add_setting('enable_preloader',
	array(
		'default'           => $default['enable_preloader'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control('enable_preloader',
	array(
		'label'    => esc_html__('Enable Preloader', 'sports-blog'),
		'section'  => 'preloader_option',
		'type'     => 'checkbox',
		'priority' => 120,
	)
);
// Footer Section.
$wp_customize->add_section('footer_section',
	array(
		'title'      => esc_html__('Footer Options', 'sports-blog'),
		'priority'   => 130,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting('copyright_text',
	array(
		'default'           => $default['copyright_text'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control('copyright_text',
	array(
		'label'    => esc_html__('Footer Copyright Text', 'sports-blog'),
		'section'  => 'footer_section',
		'type'     => 'text',
		'priority' => 120,
	)
);