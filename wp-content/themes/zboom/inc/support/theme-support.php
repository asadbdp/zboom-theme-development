<?php

function zboom_default_option(){
    add_theme_support('title-tag');

    $args = array(
        'default-color' => '000000',
        'default-image' => '%1$s/assets/images/pattern29.png',
    );
    add_theme_support('custom-background', $args);
    add_theme_support('post-thumbnails');

    load_theme_textdomain('zboom', get_template_directory_uri( ).'/assets/lang');

    if(function_exists('register_nav_menu')){
        register_nav_menu('mainmenu',__('main menu','zboom'));
    }

    function readmore($limit){
        $post_content = explode(" ", get_the_content());
        $less_content = array_slice($post_content, 0, $limit );
        echo implode(" ", $less_content);
    }    

 }

 add_action('after_setup_theme','zboom_default_option');