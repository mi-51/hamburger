<?php get_header(); ?>      
    <main class="l-main">
        <div class="l-main__left">
            <div class="p-contents">
                <div class="p-article">
                <?php
                if(have_posts()): while(have_posts()): the_post(); ?>
                        <div class="p-menu-card--custom" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                            <?php the_post_thumbnail(); ?>
                            <div class="p-menu-card__intro--custom">
                                <h1><?php the_title(); ?></h1>
                                <div class="p-menu-card__info">
                                    <p>価格：円</p>
                                    <p>アレルギー：</p>
                                </div>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; 
                else:
                ?>
                <p>商品がありません</p>
                <?php endif; ?>
                </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>