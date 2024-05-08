<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">
        <div class="container">

            <h1><?php echo the_title(); ?></h1>

            <?php 
                $content = get_the_content(); 
                if ($content) {
                    $split_content = explode('split-here', $content);
                    echo $split_content[0];
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
                    ?>
                        <article class="hl-card">
                            <a href="<?php the_permalink(); ?>">
                                <div class="hl-image" style="background-image: url('<?php echo $image['url']; ?>');">
                                
                                </div>
                            </a>
                            <div class="info">
                                <h2><a href="<?php the_permalink(); ?>"><?php echo $name; ?></a></h2>
                                <p><?php echo $excerpt . "..."; ?></p>
                                <div class="container">
                                    <button>
                                        <a href="<?php echo $link['url']; ?>" target="_blank">Visit <?php echo $link['title']; ?></a>
                                    </button>
                                </div>
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