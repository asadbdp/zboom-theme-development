<?php
/**
 * Redux Framework multi text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Multi Text', 'your-textdomain-here' ),
		'id'         => 'basic-multi-text',
		
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-multitext',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Multi Text Option', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Field subtitle', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
			),
		),
	)
);