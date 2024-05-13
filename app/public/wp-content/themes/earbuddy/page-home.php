<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">

        <?php 
            $hero_title = get_theme_mod( 'set_hero_title' );
            $hero_paragraph = get_theme_mod( 'set_hero_paragraph' );
            $hero_btn1_text = get_theme_mod( 'set_hero_button_one_text' );
            $hero_btn1_link = get_theme_mod( 'set_hero_button_one_link' );
            $hero_btn2_text = get_theme_mod( 'set_hero_button_two_text' );
            $hero_btn2_link = get_theme_mod( 'set_hero_button_two_link' );
            $hero_btn3_text = get_theme_mod( 'set_hero_button_three_text' );
            $hero_btn3_link = get_theme_mod( 'set_hero_button_three_link' );
            $hero_height = get_theme_mod( 'set_hero_height' );
            $hero_image = wp_get_attachment_url( get_theme_mod( 'set_hero_image' ));
        ?>

        <section class="hero" style="background-image: url('<?php echo $hero_image; ?>');">
            <div class="overlay" style="min-height: <?php echo $hero_height; ?>px;">
                <div class="container">
                    <div class="hero-cta"> 
                        <?php if ( $hero_title && $hero_btn1_text ) : ?>
                            <h2><?php echo $hero_title; ?></h2>
                            <p><?php echo $hero_paragraph; ?></p>
                            <a href="<?php echo $hero_btn1_link; ?>" target="_blank">
                                <button><?php echo $hero_btn1_text; ?></button>
                            </a>
                            <a href="<?php echo $hero_btn2_link; ?>" target="_blank">
                                <button><?php echo $hero_btn2_text; ?></button>
                            </a>
                        <?php else : ?>
                            <?php get_sidebar( 'hero' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <?php 
                // $content = get_the_content();
                // $split_content = explode('split-here', $content);

                // echo $split_content[0];
                // echo $split_content[1];
                // echo $split_content[2];
                // echo $split_content[3];

                
                // echo $split_content[4];
                // echo $split_content[5];
                // echo $split_content[6];
                // echo $split_content[7];
                the_content();

                get_sidebar('email');
            ?>
            
        </div>

    </main>
    <!--end main-->
<?php get_footer(); ?>