<footer class="l-footer">
    <?php
    if (has_nav_menu( 'footer-menu' )){
        echo '<div class="l-footer__section">';
        wp_nav_menu( array( 
            'theme_location' => 'footer-menu' 
        ) ); 
        echo '</div>';
    }
    ?>
         
    <p> 
        <small>Copyright : <?php bloginfo( 'name' ); ?> 2021</small>
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>