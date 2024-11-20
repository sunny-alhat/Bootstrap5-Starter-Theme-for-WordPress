<?php

/**
 * Add various theme functionalities and support
 */
function bswp_theme_support(){
    add_theme_support('title-tag'); // Add dyanmic title tag
    add_theme_support('custom-logo'); // Add dynamic custom logo
    add_theme_support('post-thumbnails'); // Enable featured image for posts
}
add_action('after_setup_theme','bswp_theme_support');


/**
 * Add menus dynamically
 */
function bswp_menus(){

    $locations = array(
        'primary' => 'Header Menu',
        'footer' => 'Footer Menu'
    );

    register_nav_menus($locations);

}
add_action('init','bswp_menus');



/**
 * Register all the CSS libraries here
 */
function bswp_register_styles(){

    // Get the version
    $version = wp_get_theme()->get('Version');

    // Insert Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css", array(), '5.3.3','all');

    // Insert Custom styles
    wp_enqueue_style('custom-styling', get_template_directory_uri()."/style.css", array(), $version,'all');

}
add_action('wp_enqueue_scripts', 'bswp_register_styles');


/**
 * Register all the JS libraries here
 */
function bswp_register_scripts(){

    // Insert bootstrap js
    wp_enqueue_script('bootstrap',get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js",array(),'5.3.3',true);

}
add_action('wp_enqueue_scripts','bswp_register_scripts');


/**
 * Widget Areas
 */
function bswp_widget_areas() {
    // Global Header Scripts
    register_sidebar(
        array(
            'name'          => 'Header Scripts Widget (Only use HTML Block)',
            'id'            => 'header-scripts-widget',
            'description'   => "Use an HTML block and put your global header scripts here ex: Google Analytics",
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => ''
        )
    );

    // Global Footer Scripts
    register_sidebar(
        array(
            'name'          => 'Footer Scripts Widget (Only use HTML Block)',
            'id'            => 'footer-scripts-widget',
            'description'   => "Use an HTML block and put your global footer scripts here ex: Javascript",
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => ''
        )
    );

    // Footer Copyright Widget
    register_sidebar(
        array(
            'name'          => 'Footer Copyright Widget (Only use Text Block)',
            'id'            => 'footer-copyright-widget',
            'description'   => "Change footer's copyright statement here",
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => ''
        )
    );
}
add_action('widgets_init', 'bswp_widget_areas');


/**
 * FILTERS MENTIONED BELOW
 */

// Change the excerpt length here
add_filter('excerpt_length', function() {
    return 10;
}, 999);

// Change the ellipses of excerpt here
add_filter('excerpt_more', function($more) {
    return '...'; // Change to your preferred text
});

?>