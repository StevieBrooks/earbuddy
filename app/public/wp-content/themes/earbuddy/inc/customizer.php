<?php 

function earbuddy_customizer( $wp_customize ) {
    // 1. Trademark 
    $wp_customize->add_section( 'sec_trademark', array(
        'title' => 'Trademark Settings',
        'description' => 'A place to write trademark info',
        'priority' => 190
    ));

        $wp_customize->add_setting( 'set_trademark', array(
            'type' => 'theme_mod',
            'default' => 'Trademark info here',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control( 'set_trademark', array(
            'label' => 'Trademark Info',
            'section' => 'sec_trademark',
            'type' => 'text'
        ));

    
    // 2. Hero
    $wp_customize->add_section( 'sec_hero', array(
        'title' => 'Hero Settings',
        'description' => 'Make adjustments to the hero section here',
        'priority' => 105
    ));
    
        // Title
        $wp_customize->add_setting( 'set_hero_title', array(
            'type' => 'theme_mod',
            'default' => 'This is the hero title',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control( 'set_hero_title', array(
            'label' => 'Hero Title',
            'section' => 'sec_hero',
            'type' => 'text'
        ));

        // Paragraph
        $wp_customize->add_setting( 'set_hero_paragraph', array(
            'type' => 'theme_mod',
            'default' => 'This is the hero paragraph with more info',
            'sanitize_callback' => 'sanitize_textarea_field'
        ));

        $wp_customize->add_control( 'set_hero_paragraph', array(
            'label' => 'Hero Paragraph',
            'section' => 'sec_hero',
            'type' => 'textarea'
        ));

        // Button 1 Text
        $wp_customize->add_setting( 'set_hero_button_one_text', array(
            'type' => 'theme_mod',
            'default' => 'Button 1 Text',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control( 'set_hero_button_one_text', array(
            'label' => 'Hero Button 1 Text',
            'section' => 'sec_hero',
            'type' => 'text'
        ));

        // Button 1 Link
        $wp_customize->add_setting( 'set_hero_button_one_link', array(
            'type' => 'theme_mod',
            'default' => 'Button 1 Link',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control( 'set_hero_button_one_link', array(
            'label' => 'Hero Button 1 Link',
            'section' => 'sec_hero',
            'type' => 'url'
        ));

        // Button 2 Text
        $wp_customize->add_setting( 'set_hero_button_two_text', array(
            'type' => 'theme_mod',
            'default' => 'Button 2 Text',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control( 'set_hero_button_two_text', array(
            'label' => 'Hero Button 2 Text',
            'section' => 'sec_hero',
            'type' => 'text'
        ));

        // Button 2 Link
        $wp_customize->add_setting( 'set_hero_button_two_link', array(
            'type' => 'theme_mod',
            'default' => 'Button 2 Link',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control( 'set_hero_button_two_link', array(
            'label' => 'Hero Button 2 Link',
            'section' => 'sec_hero',
            'type' => 'url'
        ));

        // Min Height
        $wp_customize->add_setting( 'set_hero_height', array(
            'type' => 'theme_mod',
            'default' => 500,
            'sanitize_callback' => 'absint'
        ));

        $wp_customize->add_control( 'set_hero_height', array(
            'label' => 'Hero Height',
            'section' => 'sec_hero',
            'type' => 'number'
        ));

        // Background Image
        $wp_customize->add_setting( 'set_hero_image', array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        ));

        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'set_hero_image', array(
            'label' => 'Hero Image',
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        )));
}

add_action( 'customize_register', 'earbuddy_customizer' );