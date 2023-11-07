<?php

function register_custom_post(){

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

add_action( 'init', 'register_custom_post');

