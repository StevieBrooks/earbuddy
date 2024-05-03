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

            <?php get_sidebar('links'); ?>
            
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>