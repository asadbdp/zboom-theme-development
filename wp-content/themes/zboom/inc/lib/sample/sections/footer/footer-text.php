<?php

/**
 * Footer copyright text
 * 
 *  @package Redux Framework
 */

 defined('ABSPATH') || exit;

 Redux::set_section($opt_name, array(

    'title' => esc_html__('Footer', 'zboom'),
    'icon' => 'el el-text-height',


    'fields' => array(array(
        'title' => esc_html__('Copy Right Text', 'zboom'),
        'type' => 'editor',
        'id' => 'footer-text',
        'default' => 'Copyright © 2023 - Developed by',
    ),

    array(
        'title' => esc_html__('Text Link', 'zboom'),
        'type' => 'text',
        'id' => 'text-link',        
        'default' => 'Asaduzzaman'
    ),

    array(
        'title' => esc_html__('URL', 'zboom'),
        'type' => 'text',
        'id' => 'text-url',        
        'default' => 'https://bdprogrammer.com'
    ),

    array(
        'title' => esc_html__('Social Media', 'zboom'),
        'type' => 'text',
        'id' => 'social-media', 
        'options' => array(
            '1' => 'Facebook',
            '2' => 'Youtube',
            '3' => 'Instagram',
            '4' => 'Linkedin'
        )       
        
    ),
    
    ),


    

 )

);