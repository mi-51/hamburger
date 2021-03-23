<?php get_header(); ?>    
    
    <main class="l-main">
        <div class="l-main__left">
            <div class="p-contents">
                <div class="p-mainvisual--search">
                    <div class="p-mainvisual__text">
                        <h2>Search:</h2>
                        <p><?php echo get_search_query(); ?></p>
                    </div>
                </div>

                <div class="p-box--searchpage">
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>

                <div class="c-wrap__search-result">
                    <?php
                    if (isset($_GET['s']) && empty($_GET['s'])) { //検索ワードが未入力の場合は、
                        echo '検索キーワード未入力'; // '検索キーワード未入力'と出力してください。
                    } else { //そうでない場合は
                        echo $_GET['s'] .'の検索結果は'.$wp_query->found_posts .'件です'; // '検索ワードの検索結果'と件数を出力してください。
                    }
                    ?>
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
                    ?>
                <?php endif; ?>


                <div class="p-pagenation--pc p-pagenation--tab">
                    <?php if( function_exists("the_pagenation") ) the_pagenation(); ?>
                </div>
            </div>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer(); ?>
