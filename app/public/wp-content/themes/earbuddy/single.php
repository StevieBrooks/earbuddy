<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">
        <div class="container">
            
            <?php while ( have_posts() ) :
                $post = get_post();
                the_post(); 
            ?>
                <?php if ( $post->post_type === 'team-member') : 
                    $avatar = get_field('tm_avatar');
                    $name = get_field('tm_name');
                    $position = get_field('tm_position');
                    $social = get_field('tm_social');
                    $bio = get_field('tm_bio');    
                ?>
                    <article class="tm-profile">
                        <img src="<?php echo $avatar['url']; ?>" alt="">
                        <h2><?php echo $name; ?></h2>
                        <p><?php the_field('tm_position'); ?></p>
                        <p><?php echo $bio; ?></p>
                        <div class="container">
                            <a href="<?php echo $social['url']; ?>" target="_blank">
                                <button>I'm on <?php echo $social['title']; ?></button>
                            </a>
                        </div>
                    </article>
                <?php endif; ?>
                
                <?php if ( $post->post_type === 'help-link') : 
                    $name = get_field('hl_name');
                    $image = get_field('hl_image');
                    $bio = get_field('hl_bio');
                    $link = get_field('hl_link');   
                ?>
                    <article class="hl-profile">
                        <img src="<?php echo $image['url']; ?>" alt="">
                        <h2><?php echo $name; ?></h2>
                        <p><?php echo $bio; ?></p>
                        <div class="container">
                            <a href="<?php echo $link['url']; ?>" target="_blank">
                                <button>Visit <?php echo $link['title']; ?></button>
                            </a>
                        </div>
                    </article>
                <?php endif; ?>

            <?php endwhile; ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>