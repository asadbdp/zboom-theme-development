<?php
/**
 * Redux Pro Box Shadow Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Box Shadow', 'your-textdomain-here' ),
		'id'         => 'design-box-shadow',
		
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-box_shadow',
				'type'        => 'box_shadow',
				'output'      => array( '.site-header, header' ),
				'media_query' => array(
					'output'   => true,
					'compiler' => true,
					'queries'  => array(
						array(
							'rule'      => 'screen and (max-width: 360px)',
							'selectors' => array( '.box-shadow' ),
						),
						array(
							'rule'      => 'screen and (max-width: 1120px)',
							'selectors' => array( '.box-shadow-wide' ),
						),
					),
				),
				'title'       => esc_html__( 'Box Shadow', 'your-textdomain-here' ),
				'subtitle'    => esc_html__( 'Site Header Box Shadow with inset and drop shadows.', 'your-textdomain-here' ),
				'desc'        => esc_html__( 'This is the description field, again good for additional info.', 'your-textdomain-here' ),
			),
		),
	)
);
