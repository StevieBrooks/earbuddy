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
                        <a href="<?php echo $social['url']; ?>" target="_blank">
                            <button>I'm on <?php echo $social['title']; ?></button>
                        </a>
                        <p><?php echo $bio; ?></p>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>