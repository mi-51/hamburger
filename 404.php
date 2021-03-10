<?php get_header(); ?>    
    <main class="l-main">
        <div class="l-main__left">
            <div class="p-contents">
                <div class="c-wrap__404error">
                    <h2>404error : お探しのページが見つかりません</h2>
                    <img src="<?php echo esc_url ( get_template_directory_uri() .'/img/404error_cat.png'); ?>" alt="">
                    <button><a href="<?php echo esc_url(home_url('/')); ?>">ホームページに戻る</a></button>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </main> 
<?php get_footer(); ?>