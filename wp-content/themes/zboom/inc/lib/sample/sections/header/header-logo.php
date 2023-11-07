<?php
/**
 * Redux Framework logo upload.
 * 
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section($opt_name, array(
	'title' => esc_html__('Header', 'zboom'),
	'icon' => 'el el-graph-alt',

	'fields' => array(array(
		'title' => esc_html__('Logo Uploder','zboom'), 
		'type' => 'media',
		'id' => 'logo-upload',
		'compiler' => true,
		'default' => array(
			'url' => get_template_directory_uri( ).'/assets/images/logo.png',
		),
	),

	array(
		'title' => esc_html__('Menu text Color', 'zboom'),
		'subtitle' => esc_html__('You can set header menu text color', 'zboom'),
		'type' => 'link_color',
		'id' => 'menu-color',
		'default' => array(
			'regular' => '#FFFFFF',
			'hover' => '#FFFFFF',
			'active' => '#FFFFFF'
		),

	),

	array(
		'title' => esc_html__('Menu hover Background Color', 'zboom'),
		'subtitle' => esc_html__('You can set menu hover color', 'zboom'),
		'type' => 'color',
		'id' => 'menu-hover-color',
		'default' => '#F36A97',

	),

	array(
		'title' => esc_html__('Menu Active Background Color', 'zboom'),
		'subtitle' => esc_html__('You can set active color', 'zboom'),
		'type' => 'color',
		'id' => 'menu-active-color',
		'default' => '#F36A97',

	),

	array(
		'title' => esc_html__('Nav Background Color', 'zboom'),
		'subtitle' => esc_html__('You can set Nav background color', 'zboom'),
		'type' => 'color',
		'id' => 'header-bg-color',
		'default' => '#ED145B',

	),

	array(
		'title' => esc_html__('Navbar Menu Height', 'zboom'),
		'subtitle' => esc_html__('You can set navbar menu height', 'zboom'),
		'type' => 'dimensions',
		'units' => array('px', 'em', '%'),
		'id' => 'nav-height',
		'width' => false,
		'default' => array(
			'height' => '80px',
			'width' => '100',			
		),

	),

	)

  )
);



