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

// Google font Enqueue
function bhaira_add_google_font(){
    wp_enqueue_style( 'bhaira_google_fonts', 'https://fonts.googleapis.com/css2?family=BBH+Bartle&display=swap' false);
}

add_action( 'wp_enqueue_scripts', 'bhaira_add_google_font' );

// Theme Function header er logo change koarar opton create.
function bhaira_customizer_register($wp_customize){
    // header er logo change er option toiri kora hoiche.
    $wp_customize->add_section('bhaira_header_area', array(
        'title' =>__('Header Area', 'bhaira-theme'),
        'description' => 'If you interested to update your header. you can do it here.'
    ));

    // akta setting add kore default site logo select kore dilam.
    $wp_customize->add_setting('bhaira_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/bhaira-logo.svg',
    ));

    // Header er logor jonno ekta contro set korlam
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bhaira_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interest to update your header area, you can do it here.',
        'setting' => 'bhaira_logo',
        'section' => 'bhaira_header_area',
    )));
}
 
add_action( 'customize_register', 'bhaira_customizer_register' )

?>