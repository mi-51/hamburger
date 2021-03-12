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
            <p>ウィジット設定なし</p>
        </div>
        <?php endif; ?>
    </div>
</aside>            
