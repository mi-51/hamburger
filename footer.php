<footer class="l-footer">
    <div class="l-footer__section">
        <?php 
            wp_nav_menu( array( 
                'theme_location' => 'footer-menu' 
            ) ); 
        ?>    
    </div>
    <p> 
        <small>Copyright : <?php bloginfo( 'name' ); ?> 2021</small>
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>