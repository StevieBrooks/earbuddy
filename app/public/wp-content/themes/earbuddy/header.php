<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="top-bar">
            <div class="logo">
                <?php if (function_exists( 'the_custom_logo')) {
                    the_custom_logo();
                } ?>
                <h2><a href="http://earbuddy.local/">Ear-Buddy!</a></h2>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location' => 'earbuddy_main_menu', 'depth' => 2)); ?>
            </nav>
        </div>
        <div class="bottom-bar">
            <nav class="bottom-nav">
                <?php wp_nav_menu(array('theme_location' => 'earbuddy_bottom_menu', 'depth' => 2)); ?>
            </nav>
        </div>
    </header>