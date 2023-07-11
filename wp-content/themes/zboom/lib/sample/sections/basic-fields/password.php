<?php
/**
 * Redux Framework password config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Password', 'your-textdomain-here' ),
		'id'         => 'basic-password',
		
		'fields'     => array(
			array(
				'id'       => 'password',
				'type'     => 'password',
				'username' => true,
				'title'    => 'Password Field',
			),
		),
	)
);
