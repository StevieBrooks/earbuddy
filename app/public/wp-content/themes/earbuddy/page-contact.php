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
                get_sidebar( 'contact' );
            ?>
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>