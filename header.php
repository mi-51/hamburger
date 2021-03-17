<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="l-header">
        <div class="l-header__top p-bar">
            <button class="p-bar__button">Menu</button>
        </div>
        <div class="l-header__bottom">
            <div class="l-header__bottom__left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                </a>
            </div>
            <?php get_search_form(); ?>
        </div>

        <?php 
            if ( has_nav_menu('header-menu') ){
            echo '<div class="l-header__section">';
            wp_nav_menu( array( 
                    'theme_location' => 'header-menu' 
                ) );    
            echo '</div>';
            }
        ?>
    </header>