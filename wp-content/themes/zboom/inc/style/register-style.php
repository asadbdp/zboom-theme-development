<?php

/**
 * register stylesheet
 */

 function register_css_and_js_style(){

    wp_register_style('zerogrid', get_template_directory_uri( ).'/assets/css/zerogrid.css');
    wp_register_style('style', get_template_directory_uri( ).'/assets/css/style.css');
    wp_register_style('responsive', get_template_directory_uri( ).'/assets/css/responsive.css');
    wp_register_style('new-style', get_template_directory_uri( ).'/style.css');
    wp_register_style('responsiveslides', get_template_directory_uri( ).'/assets/css/responsiveslides.css');
    wp_register_script('responsiveslides', get_template_directory_uri( ).'/assets/js/responsiveslides.js');
    wp_register_script('custom', get_template_directory_uri( ).'/assets/js/custom.js');


    wp_enqueue_style('zerogrid');
    wp_enqueue_style('style');
    wp_enqueue_style('responsive');
    wp_enqueue_style('new-style');
    wp_enqueue_style('responsiveslides');

    wp_enqueue_script('jquery');
    wp_enqueue_script('responsiveslides');
    wp_enqueue_script('custom');
    

 }

 add_action('wp_enqueue_scripts', 'register_css_and_js_style');