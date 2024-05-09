<?php 
/*
Template Name: Info Template
*/
?>
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
        </div>
    </main>
    <!--end main-->
<?php get_footer(); ?>