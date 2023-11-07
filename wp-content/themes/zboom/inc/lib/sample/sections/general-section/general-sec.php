<?php
/**
 * General options
 * 
 * @package Redux Framework * 
 * 
 */

 defined('ABSPATH') || exit;

 Redux::set_section($opt_name, array(
    'title' => esc_html__('General Settings', 'zboom'),
    'desc' => esc_html__('you may set general settings', 'zboom'),
    'subtitle' => esc_html__('body background color', 'zboom'),
    'icon' => 'el el-cogs',

    'fields' => array(array(
        'title' => esc_html__('Website Layout', 'zboom'),        
        'type' => 'image_select',
        'id' => 'website_layout',        
        'options' => array(
           '1' => array(
            'img' => get_template_directory_uri(  ) . '/inc/lib/redux-core/assets/img/1col.png',
           ),

           '2' => array(
            'img' => get_template_directory_uri(  ) . '/inc/lib/redux-core/assets/img/2cl.png',
           ),

           '3' => array(
            'img' => get_template_directory_uri(  ) . '/inc/lib/redux-core/assets/img/3cm.png',
           ),
           
        ),

        'default' => '1'
        

    ),

    array(
        'title' => 'Body Backgruond',
        'id' => 'zbg-color',
        'type' => 'background',
        'default' => array(
            'background-color' => '#FFF000',
            'background-image' => get_template_directory_uri( ).'/assets/images/pattern29.png',
            'background-size' => 'cover',
            'background-position' => 'center center',
            'background-repeat' => 'repeat',
            'background-attachment' => 'fixed'

        ),
    ),
    
    array(
        'title' => esc_html__('Typography', 'zboom'),
        'subtitle' => esc_html( 'Body Font', 'zboom' ),
        'type' => 'typography',
        'id' => 'custom-font',
        'google' => true,
        'text-transform' => true,
        'font_family_clear' => false,
        'default' => array(
            'color' => '#FFF',
            'font-size' => '16px',
            'font-weight' => '400',
            'line-height' => '24px',
            'font-family' => 'Arial, Helvetica, sans-serif',
            'google'      => true,
        ),
        'output' => array('p'),

    ),

    array(
        'title' => esc_html( 'Gender', 'zboom' ),
        'type'=> 'radio',
        'id' => 'gender',
        'options' => array(
            '1' => 'Male',
            '2' => 'Female'
        ),
        'default' => '2'
    ),

    array(
        'title' => esc_html( 'Select Your Options', 'zboom' ),
        'type'=> 'select',
        'id' => 'select-option',
        'options' => array(
            '1' => 'Male',
            '2' => 'Female'
        ),
        'default' => '1'
    ),


    array(
        'title' => esc_html( 'Select Your Category', 'zboom' ),
        'type'=> 'select',
        'id' => 'select-category',
        'data' => 'category', //post, menu, page, post_types
        'multi' => true,
        'default' => '1',
    ),

    array(
        'title' => esc_html( 'Select Your Price Range', 'zboom' ),
        'type'=> 'slider',
        'id' => 'price-range',
        'min' => 0, 
        'default' => 60,
        'display_value' => 'label', //text
        'max' => 100,
        'step' => 5,
    ),

    array(
        'title' => esc_html( 'Left Side Category', 'zboom' ),
        'type'=> 'select',
        'id' => 'left-side-cat',
        'data' => 'category',
        'default' => '1'
        
    ),

    array(
        'title' => esc_html( 'Right Side Category', 'zboom' ),
        'type'=> 'select',
        'id' => 'right-side-cat',
        'data' => 'category',
        'default' => '11'
        
    ),

    
),





 ));



