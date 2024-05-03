<footer class="site-footer">
        <div class="logo">
            <?php if (function_exists( 'the_custom_logo')) {
                the_custom_logo();
            } ?>
            <h4><a href="http://earbuddy.local/">Ear-Buddy!</a></h4>
        </div>
        <div class="copyright">
            <?php $trademarkInfo = get_theme_mod( 'set_trademark' ); ?>
            <p><?php echo $trademarkInfo; ?></p>
        </div>
        <nav class="footer-nav">
            <?php wp_nav_menu(array('theme_location' => 'earbuddy_footer_menu', 'depth' => 2)); ?>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>