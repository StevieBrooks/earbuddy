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
                        <h2><?php echo $hero_title; ?></h2>
                        <p><?php echo $hero_paragraph; ?></p>
                        <a href="<?php echo $hero_btn1_link; ?>" target="_blank">
                            <button><?php echo $hero_btn1_text; ?></button>
                        </a>
                        <a href="<?php echo $hero_btn2_link; ?>" target="_blank">
                            <button><?php echo $hero_btn2_text; ?></button>
                        </a>
                        <a href="<?php echo $hero_btn3_link; ?>" target="_blank">
                            <button><?php echo $hero_btn3_text; ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <?php 
                $content = get_the_content();
                $split_content = explode('split-here', $content);

                echo $split_content[0];
                echo $split_content[1];
                echo $split_content[2];
                echo $split_content[3];

                get_sidebar('email');

                echo $split_content[4];
                echo $split_content[5];
                echo $split_content[6];
            ?>

            <?php 
                $args = array(
                    'category_name' => 'user-feedback'
                );

                $feedback = new WP_Query($args);
                
                if ($feedback->have_posts()) : 
                    echo $split_content[7];
            ?>
                    <section class="feedback-section">

                        <?php while ($feedback->have_posts()) : $feedback->the_post() ;?>
                            <article class="feedback-post">
                                <?php the_content(); ?>
                                <?php the_time(get_option('date_format'));  ?>
                            </article>
                        <?php endwhile; ?>

                    </section>
                    <?php echo $split_content[8]; ?>
            <?php else : ?>          
                    <p>There is currently no feedback to display.</p>
            <?php endif; ?>

            <?php get_sidebar('feedback-form'); ?>
            
        </div>

    </main>
    <!--end main-->
<?php get_footer(); ?>