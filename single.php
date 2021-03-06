<?php get_header(); ?>    
    
    <main class="l-main">
        <div class="l-main__left">
            <div class="p-contents">
                <div class="p-mainvisual--single">
                    <h1>h1チーズバーガー</h1>
                </div>

                <div class="p-article">
                    <div class="p-article__htext">
                        <h2>見出しh2</h2>
                        <p>pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </div>
                    <div class="p-article__quote">
                        <blockquote>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</blockquote>
                        <p>出典元：<a href="#">https://xxxx.com</a></p>
                    </div>

                    <div class="p-picture">
                        <div class="p-picture__single">
                            <img src="<?php echo esc_url ( get_template_directory_uri() . '/img/cooked-foods-750073-2.png'); ?>" alt="">
                        </div>
                        <div class="p-picture__column top">
                            <img src="<?php echo esc_url ( get_template_directory_uri() . '/img/cooked-foods-750073-2.png'); ?>" alt="">
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <div class="p-picture__column bottom">
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <img src="<?php echo esc_url ( get_template_directory_uri() . '/img/cooked-foods-750073-2.png'); ?>" alt="">
                        </div>

                        <div class="p-picture__half">
                            <img src="<?php echo esc_url ( get_template_directory_uri() . '/img/cooked-foods-750073-2.png'); ?>" alt="">
                        </div>
                        <div class="p-picture__tile">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/img/cooked-foods-750073-2.png'(); ?>" alt="">
                        </div>
                    </div>

                    <div class="p-article__list">
                        <ol>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト
                                <ol>
                                    <li>リスト2リスト2リスト</li>
                                    <li>リスト2リスト2リスト</li>
                                </ol>
                            </li>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ol>
                        <ul>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト
                                <ul>
                                    <li>リスト2リスト2リスト</li>
                                    <li>リスト2リスト2リスト</li>
                                </ul>
                            </li>
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                    </div>

                    <pre class="c-wrap__code">
                        <code>&lt;html>
                        &lt;head>
                        &lt;/head>
                        &lt;body>
                        &lt;/body>
                    &lt;/html></code>    
                    </pre>

                    <div class="c-wrap__table">
                        <table>
                            <tr>
                                <th>テーブル</th>
                                <th>テーブル</th>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                            <tr>
                                <td>テーブル</td>
                                <td>テーブル</td>
                            </tr>
                        </table>    
                    </div>

                    <div class="c-button">
                        <button><a href="#">ボタン</a></button>
                    </div>

                <p>boldboldboldboldboldbold</p>
            </div>
        </div>

    <?php get_sidebar(); ?>

    </main>
    
    <?php get_footer(); ?>

    <?php wp_footer(); ?>
</body>
</html>