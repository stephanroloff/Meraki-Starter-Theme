</main>
        <footer class="footer-container full-width">
            <div class="container-global-wide">
                <!-- <?php dynamic_sidebar('footer-widget'); ?> -->

                <?php
                wp_nav_menu( array(
                    'theme_location'=>'footer-menu',
                    ) )
                ?>
            </div>
        </footer>
    </div>
    <?php wp_footer();?>
</body>
</html>