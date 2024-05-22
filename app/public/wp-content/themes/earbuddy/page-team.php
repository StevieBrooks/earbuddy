<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">
        <div class="container">
            
            <?php 
                $content = get_the_content(); 
                if ($content) {
                    the_content();
                } else {
                    echo "<h2 class='dev-message'>Page under development</h2>";
                }
            ?>

            <?php 
                $args = array(
                    'post_type' => 'team-member',
                );

                $teamQuery = new WP_Query($args);

                // echo '<pre>';
                // var_dump($teamQuery);
                // echo '</pre>';

                if ($teamQuery->have_posts()) : 
            ?>
                <section class="team-cards">
                    <?php
                        while ($teamQuery->have_posts()) : $teamQuery->the_post() ;

                        $avatar = get_field('tm_avatar');
                        $name = get_field('tm_name');
                        $position = get_field('tm_position');
                        $social = get_field('tm_social');
                        $bio = get_field('tm_bio');
                        $excerpt = get_field('tm_excerpt');
                    ?>
                        <article class="tm-card">
                            <a href="<?php the_permalink(); ?>">
                                <div class="avatar" style="background-image: url('<?php echo $avatar['url']; ?>');">
                                
                                </div>
                            </a>
                            <div class="info">
                                <h2><a href="<?php the_permalink(); ?>"><?php echo $name; ?></a></h2>
                                <p><?php echo $position; ?></p>
                                <p><?php echo $excerpt . "..."; ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </section>
                    <?php else : ?>
                <p>There are currently no team members to display.</p>
            <?php endif; ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>