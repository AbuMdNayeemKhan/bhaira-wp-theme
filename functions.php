<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme CSS an JavaScript file calling
function bhaira_css_js_file_calling() {
    // CSS File calling
    wp_enqueue_style( 'bhaiar-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_register_style( 'cunstom', get_template_directory_uri(  ).'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('cunstom');

    // JavaScript File calling
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrap', get_template_directory_uri(  ).'/js/bootstrap.min.js', array(), '5.0.2', 'true' );
    wp_enqueue_script('custom', get_template_directory_uri(  ).'/js/custom.js', array(), '5.0.2', 'true' );
}

add_action( 'wp_enqueue_scripts', 'bhaira_css_js_file_calling');

?>