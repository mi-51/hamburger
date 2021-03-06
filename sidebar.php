<aside class="l-main__right">
    <div class="l-sidebar">
        <div class="c-button__close">
        </div>
        <p>Menu</p>
        <?php
            if ( is_active_sidebar( 'menu_widget' ) ) :
                dynamic_sidebar( 'menu_widget' );
            else:
        ?>
        <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジットは設定されていません。</p>
        </div>
        <?php endif; ?>
    </div>
</aside>            
