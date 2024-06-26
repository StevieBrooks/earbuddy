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

            <!--LINKS POSTS-->
            <?php 
                $args = array(
                    'post_type' => 'help-link'
                );

                $linkQuery = new WP_Query($args);

                if ( $linkQuery->have_posts() ) :
            ?>
                <section class="hl-cards">
                    <?php while ( $linkQuery->have_posts() ) : $linkQuery->the_post() ; 
                        $name = get_field('hl_name');
                        $image = get_field('hl_image');
                        $excerpt = get_field('hl_excerpt');
                        $link = get_field('hl_link');
                        $permalink = get_permalink();
                    ?>
                        <article class="hl-card">
                            <a href="<?php echo str_contains($permalink, 'coming-soon') ? null : $permalink ; ?>">
                                <div class="hl-image" style="background-image: url('<?php echo $image['url']; ?>');">
                                
                                </div>
                            </a>
                            <div class="info">
                                <h2><a href="<?php echo str_contains($permalink, 'coming-soon') ? null : $permalink ; ?>"><?php echo $name; ?></a></h2>
                                <p><?php echo $excerpt . "..."; ?></p>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </section>
            <?php else : ?>
                <p>Apologies. There are currently no links to display.</p>
            <?php endif; ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>