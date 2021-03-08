<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) {
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) {
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/scss/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    function register_hamburger_menus(){
        register_nav_menus( array(
            'side-menu' => 'SideMenu',
            'footer-menu' => 'FooterMenu',
        ));
    }
    add_action( 'after_setup_theme', 'register_hamburger_menus');

    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'All Menu',
                'id'            => 'menu_widget',
                'description'   => 'メニューの一覧です',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="c-category-title">',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );
    
    function the_pagination() {
        global $wp_query; //$wp_queryとはWordPressがページ読み込む時にデータベースから自動的に取得したさまざまなデータの集まりが格納されている変数
                          //その変数にアクセスしたいのでglobalでグローバル宣言をする
        $big = 999999999; //URLを変換するときに使う。ありえない数字にしておけばOK
        if ( $wp_query->max_num_pages <= 1 ) //もし最大ページ数が1以下(ページネーションの必要がない)であれば、
            return; //何もしないで。
        echo '<nav class="pagination">'; //ページ数が2以上であれば<nav class="pagination">を出力して。
        echo paginate_links( array( //中身はこんな感じで出力しといて
            'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
                //baseパラメータはページ番号付きのリンクを作るために使われるベースの URLを指定
                //str_replace()はカッコ内で指定した文字列からURLを作る
                //ecc_urlはURLの無害化を行う。セキュリティを固めるために書くべき
                //get_pagenum_linkは与えられた数字($big)からページ番号のリンクを返す。https://xxxx.com/?paged=999999999/という出力になる
                //%#%は999999999を%#%に置き換える指定
                //以上を経て https://xxxx.com/?paged=%#% が設定される
            'format'       => '',
                //formatパラメータはページネーションの構造を指定するのに使う。''にしているのは初期値でOKですということ
            'current'      => max( 1, get_query_var('paged') ),
                //currentパラメータは現在のページを出す
                //初期値は0だがこのままでは挙動がおかしくなるので指定する
                //max関数で1以上を出すように指定
                //get_query_varは指定したクエリデータを取得する
                //pagedは現在のページを取得してくれる
            'total'        => $wp_query->max_num_pages,
                //totalパラメータは最大投稿数の取得をする
                //$wp_queryのmax_num_pagesから取得するよーという指定
            'prev_text'    => '&lt;&lt;',
                //前へや<<など1つ前に戻るリンクをどんな文字列にしたいか
            'next_text'    => '&gt;&gt;',
                //次へや>>など1つ後ろへいくリンクをどんな文字列にしたいか
            'type'         => 'list',
                //どんな形で返して欲しいか。ここではHTMLのulタグを使ったリストを返してくれる
            'end_size'     => 1,
                //ページ番号のリストの両端（最初と最後）にいくつの数字を表示するか。今回は1つずつに指定
            'mid_size'     => 1
                //現在のページの両側にいくつの数字を表示するか。(現在のページは含まない)今回は1つずつに指定
        ) );
        echo '</nav>'; //中身出力終わったら閉じタグ出しといて
    }
      