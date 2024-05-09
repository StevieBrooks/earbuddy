<?php get_header(); ?>
    <!--end header-->
    <main class="site-main">
        <div class="container">

            <h1><?php echo the_title(); ?></h1>

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
                    'category_name' => 'user-faqs',
                    'order' => 'ASC'
                );

                $catQuery = new WP_Query($args);

                if ($catQuery->have_posts()) : ?>
                    <section class="faq-posts">
                        <?php while ($catQuery->have_posts()) : $catQuery->the_post() ; ?>
                            <article class="faq-post">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile; ?>
                    </section>
                <?php else : ?>
                <p>There are currently no FAQs to display.</p>
            <?php endif; ?>

            <?php get_sidebar('faq'); ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>