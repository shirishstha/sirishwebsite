<?php
// Creates service Reviews Custom Post Type 
function service_posttype() { 
    $args = array( 
    'label' => 'Service', 
    'public' => true, 
    'show_ui' => true, 
    'capability_type' => 'post', 
    'hierarchical' => false, 
    //'rewrite' => array('slug' => 'service-reviews'), 
    'query_var' => true, 
    'menu_icon' => 'dashicons-video-alt', 
    'supports' => array( 
    'title', 
    'editor', 
    // 'excerpt', 
    // 'trackbacks', 
    // 'custom-fields', 
    // 'comments', 
    // 'revisions', 
    // 'thumbnail', 
    // 'author', 
   // 'page-attributes',
    ) 
    ); 
    register_post_type( 'service', $args ); 
    }
    add_action( 'init', 'service_posttype' );

    // Creates slider Custom Post Type 

    function slider_posttype() { 
        $args = array( 
        'label' => 'slider', 
        'public' => true, 
        'show_ui' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        //'rewrite' => array('slug' => 'slider-reviews'), 
        'query_var' => true, 
        'menu_icon' => 'dashicons-video-alt', 
        'supports' => array( 
        'title', 
        'editor', 
        // 'excerpt', 
        // 'trackbacks', 
        // 'custom-fields', 
        // 'comments', 
        // 'revisions', 
         'thumbnail', 
        // 'author', 
       // 'page-attributes',
        ) 
        ); 
        register_post_type( 'slider', $args ); 
        }
    
        add_action( 'init', 'slider_posttype' );
?>
        