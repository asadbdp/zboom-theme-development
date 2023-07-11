<?php
/**
 * Redux Pro Custom Fonts Sample config.
 *
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Custom Fonts', 'your-textdomain-here' ),
		
		'subsection' => true,
		'fields'     => array(
			array(
				'id'   => 'custom_fonts',
				'type' => 'custom_fonts',
			),
			array(
				'id'          => 'custom_fonts_typography',
				'type'        => 'typography',
				'title'       => esc_html__( 'Custom Fonts Typography', 'your-textdomain-here' ),
				'subtitle'    => 'This will modify the font family of the .entry-title classes.',
				'output'      => '.site-title, .widget-title, .entry-title, .wp-block-site-title',
				'font-size'   => false,
				'line-height' => false,
				'text-align'  => false,
			),
		),
	)
);
