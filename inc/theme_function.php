<?php
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

    // Menu Position Option start
    $wp_customize->add_section('bhaira_menu_option', array(
        'title' => __('Menu Position Option', 'bhaira-theme'),
        'description' => 'If you interest to change your menu position you can do it.',
    ));

    $wp_customize->add_setting('bhaira_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('bhaira_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'bhaira_menu_position',
        'section' => 'bhaira_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
    // Menu Position Option ended

    // Footer opthon start
    $wp_customize->add_section('bhaira_footer_option', array(
        'title'       => __('Footer Option', 'bhaira-theme'),
        'description' => 'If you are interested in changing or updating your footer settings, you can do it here.',
    ));

    $wp_customize->add_setting('bhaira_copyright_section', array(
        'default' => '&copy; Copyright 2025 || Bhaira',
    ));

    $wp_customize->add_control('bhaira_copyright_section', array(
        'label'       => 'Copyright Text',
        'description' => 'You can update your copyright text from here.',
        'setting'     => 'bhaira_copyright_section',
        'section'     => 'bhaira_footer_option',
        'type'        => 'text',
    ));
    // Footer option ended
}
add_action( 'customize_register', 'bhaira_customizer_register' );
?>