<?php 

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