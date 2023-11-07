<?php
/**
 * Redux Pro Social Profiles Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Social Profiles', 'your-textdomain-here' ),
		
		'subtitle'   => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'              => 'opt-social-profiles',
				'type'            => 'social_profiles',
				'title'           => esc_html__( 'Social Profiles', 'your-textdomain-here' ),
				'subtitle'        => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'your-textdomain-here' ),
				'hide_widget_msg' => true,
			),
		),
	)
);
