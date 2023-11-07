<?php
/**
 * @package zboom
 */

require_once (get_template_directory() . '/inc/support/plugins/zboom-plugin-activation.php' );


function zboom_register_required_plugins() {

	$plugins = array(		
	
		array(
			'name'               => 'Classic Editor',
			'slug'               => 'classic-editor',
			'version'            => '1.6.3',
			'required'           => false,
		),

		array(
			'name'               => 'Classic Widgets',
			'slug'               => 'classic-widgets',
			'version'            => '0.3',
			'required'           => false,
		),

		
	);

	$config = array(
		'id'           => 'zboom',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => false,
		'is_automatic' => false,
		'default_path' => false
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'zboom_register_required_plugins' );
