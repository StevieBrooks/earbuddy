<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d66dcaffda.js" crossorigin="anonymous"></script>
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
            <nav class="dropdown-nav">
                <div class="overlay"></div>
                <button class="hamburger">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </button>
                <div class="dropdown">
                    <?php wp_nav_menu(array('theme_location' => 'earbuddy_main_menu', 'depth' => 2)); ?>
                    <?php wp_nav_menu(array('theme_location' => 'earbuddy_bottom_menu', 'depth' => 2)); ?>
                </div>
            </nav>
        </div>
        <div class="bottom-bar">
            <nav class="bottom-nav">
                <?php wp_nav_menu(array('theme_location' => 'earbuddy_bottom_menu', 'depth' => 2)); ?>
            </nav>
        </div>
    </header>

    