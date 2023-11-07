<?php
/**
 * Redux Framework disable section config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Disable Section', 'your-textdomain-here' ),
		'id'               => 'basic-checkbox-section-disable',
		'subsection'       => true,
		'customizer_width' => '450px',
		'disabled'         => true,
		
		'fields'           => array(
			array(
				'id'       => 'opt-checkbox-section-disable',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Checkbox Option', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'your-textdomain-here' ),
				'default'  => '1', // 1 = on | 0 = off.
			),
		),
	)
);
