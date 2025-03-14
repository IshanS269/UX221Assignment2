<?php
/**
 * slider section
 *
 * @package Sports Blog
 */

$default = sports_blog_get_default_theme_options();

// Slider Main Section.
$wp_customize->add_section('slider_section_settings',
	array(
		'title'      => esc_html__('Slider Options', 'sports-blog'),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

// Setting - show_slider_section.
$wp_customize->add_setting('show_slider_section',
	array(
		'default'           => $default['show_slider_section'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control('show_slider_section',
	array(
		'label'    => esc_html__('Enable Slider', 'sports-blog'),
		'section'  => 'slider_section_settings',
		'type'     => 'checkbox',
		'priority' => 100,
	)
);

/*No of Slider*/
$wp_customize->add_setting('number_of_home_slider',
	array(
		'default'           => $default['number_of_home_slider'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_select',
	)
);
$wp_customize->add_control('number_of_home_slider',
	array(
		'label'       => esc_html__('Select no of slider', 'sports-blog'),
		'description' => esc_html__('If you are using selection "from page" option please refresh to get actual no of page', 'sports-blog'),
		'section'     => 'slider_section_settings',
		'choices'     => array(
			'1'          => esc_html__('1', 'sports-blog'),
			'2'          => esc_html__('2', 'sports-blog'),
			'3'          => esc_html__('3', 'sports-blog'),
			'4'          => esc_html__('4', 'sports-blog'),
			'5'          => esc_html__('5', 'sports-blog'),
		),
		'type'     => 'select',
		'priority' => 105,
	)
);

// Setting - show_slider_content_section.
$wp_customize->add_setting('show_slider_content_section',
	array(
		'default'           => $default['show_slider_content_section'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_checkbox',
	)
);
$wp_customize->add_control('show_slider_content_section',
	array(
		'label'    => esc_html__('Enable Slider Content', 'sports-blog'),
		'section'  => 'slider_section_settings',
		'type'     => 'checkbox',
		'priority' => 105,
	)
);
/*content excerpt in Slider*/
$wp_customize->add_setting('number_of_content_home_slider',
	array(
		'default'           => $default['number_of_content_home_slider'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_positive_integer',
	)
);
$wp_customize->add_control('number_of_content_home_slider',
	array(
		'label'       => esc_html__('Select no words of slider', 'sports-blog'),
		'section'     => 'slider_section_settings',
		'type'        => 'number',
		'priority'    => 110,
		'input_attrs' => array('min' => 0, 'max' => 200, 'style' => 'width: 150px;'),

	)
);

// Setting - select_slider_from.
$wp_customize->add_setting('select_slider_from',
	array(
		'default'           => $default['select_slider_from'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sports_blog_sanitize_select',
	)
);
$wp_customize->add_control('select_slider_from',
	array(
		'label'          => esc_html__('Select Slider From', 'sports-blog'),
		'section'        => 'slider_section_settings',
		'type'           => 'select',
		'choices'        => array(
			'from-page'     => esc_html__('Page', 'sports-blog'),
			'from-category' => esc_html__('Category', 'sports-blog')
		),
		'priority' => 110,
	)
);

for ($i = 1; $i <= sports_blog_get_option('number_of_home_slider'); $i++) {
	$wp_customize->add_setting('select_page_for_slider_'.$i, array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sports_blog_sanitize_dropdown_pages',
		));

	$wp_customize->add_control('select_page_for_slider_'.$i, array(
			'input_attrs' => array(
				'style'      => 'width: 50px;',
			),
			'label'           => esc_html__('Slider From Page', 'sports-blog').' - '.$i,
			'priority'        => '120'.$i,
			'section'         => 'slider_section_settings',
			'type'            => 'dropdown-pages',
			'priority'        => 120,
			'active_callback' => 'sports_blog_is_select_page_slider',
		)
	);
}

// Setting - drop down category for slider.
$wp_customize->add_setting('select_category_for_slider',
	array(
		'default'           => $default['select_category_for_slider'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(new Sports_Blog_Dropdown_Taxonomies_Control($wp_customize, 'select_category_for_slider',
		array(
			'label'           => esc_html__('Category for slider', 'sports-blog'),
			'description'     => esc_html__('Select category to be shown on tab ', 'sports-blog'),
			'section'         => 'slider_section_settings',
			'type'            => 'dropdown-taxonomies',
			'taxonomy'        => 'category',
			'priority'        => 130,
			'active_callback' => 'sports_blog_is_select_cat_slider',

		)));

