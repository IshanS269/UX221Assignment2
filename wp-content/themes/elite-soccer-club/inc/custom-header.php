<?php
function elite_soccer_club_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'elite_soccer_club_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'flex-width'            => true,
		'wp-head-callback'       => 'elite_soccer_club_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'elite_soccer_club_custom_header_setup' );

if ( ! function_exists( 'elite_soccer_club_header_style' ) ) :
function elite_soccer_club_header_style() {
	$elite_soccer_club_header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		.site-title,
		.site-description {
			color: #<?php echo esc_attr( $elite_soccer_club_header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
