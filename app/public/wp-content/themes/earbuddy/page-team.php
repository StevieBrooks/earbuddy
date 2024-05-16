<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">
        <div class="container">
            
            <?php 
                $content = get_the_content();
                $split_content = explode('split-here', $content);
                echo $split_content[0];
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
                                <div class="container">
                                    <button>
                                        <a href="<?php echo $social['url']; ?>" target="_blank">Visit my <?php echo $social['title']; ?></a>
                                    </button>
                                </div>
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