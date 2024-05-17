<?php 

require get_template_directory() . '/inc/customizer.php';

function earbuddy_load_scripts() {
    wp_enqueue_style('earbuddy-style', get_stylesheet_uri(), array(), '1.1', 'all');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', false );
    wp_enqueue_script('faq-toggle', get_template_directory_uri() . '/assets/js/faq-toggle.js', array(), '1.0', false );
    wp_enqueue_script('benefit-toggle', get_template_directory_uri() . '/assets/js/benefit-toggle.js', array(), '1.0', false );
}

add_action('wp_enqueue_scripts', 'earbuddy_load_scripts');

function earbuddy_config() {
    register_nav_menus(
        array(
            'earbuddy_main_menu' => 'Main Menu',
            'earbuddy_bottom_menu' => 'Bottom Menu',
            'earbuddy_footer_menu' => 'Footer Menu'
        )
        );
    
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-header', array(
        'width' => 1500,
        'height' => 500,
        'default-image' => get_template_directory_uri() . '/images/logo.png',
    ) );
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'earbuddy_config');

add_action('widgets_init', 'earbuddy_sidebars');

function earbuddy_sidebars() {

        register_sidebar(
            array(
                'name' => 'FAQ Sidebar',
                'id' => 'sidebar-faq',
                'description' => 'Sidebar for users to submit their own questions.',
                'class' => 'faq-sidebar',
                'before_widget' => '<div class="faq-sidebar">',
                'after_widget' => '</div>'
            )
            );

        register_sidebar(
            array(
                'name' => 'Contact Sidebar',
                'id' => 'sidebar-contact',
                'description' => 'Sidebar for users to sget in touch.',
                'class' => 'contact-sidebar',
                'before_widget' => '<div class="contact-sidebar">',
                'after_widget' => '</div>'
            )
            );

        register_sidebar(
            array(
                'name' => 'Email Sidebar',
                'id' => 'sidebar-email',
                'description' => 'Sidebar for email subscribe.',
                'class' => 'email-sidebar',
                'before_widget' => '<div class="email-sidebar">',
                'after_widget' => '</div>'
            )
            );

        register_sidebar(
            array(
                'name' => 'Hero Sidebar',
                'id' => 'sidebar-hero',
                'description' => 'Sidebar for hero poll.',
                'class' => 'hero-sidebar',
                'before_widget' => '<div class="hero-sidebar">',
                'after_widget' => '</div>'
            )
            );
}