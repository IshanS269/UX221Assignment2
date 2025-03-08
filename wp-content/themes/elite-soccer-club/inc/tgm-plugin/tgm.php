<?php
	
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function elite_soccer_club_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'elite-soccer-club' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	elite_soccer_club_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'elite_soccer_club_register_recommended_plugins' );