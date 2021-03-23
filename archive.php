<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__left">
        <div class="p-contents">
            <div class="p-mainvisual--archive">
                <div class="p-mainvisual__text">
                    <h2>Menu:</h2>
                    <p><?php single_cat_title(); ?></p>
                </div>
            </div>

            <div class="p-box--archivepage">
                <h4>小見出しが入ります</h4>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <div class="p-menu-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_post_thumbnail(); ?>
                        <div class="p-menu-card__intro">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </div>
                <?php endwhile;
            else :
                ?><p>表示する記事がありません</p>
            <?php endif; ?>


            <div class="p-pagenation--pc p-pagenation--tab">
                <?php if( function_exists("the_pagenation") ) the_pagenation(); ?>
            </div>
        </div>
    </div>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>