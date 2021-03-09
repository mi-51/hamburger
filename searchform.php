<form class="l-header__bottom__right p-serch-form" method="get" action="<?php echo home_url('/'); ?>">
    <input class="p-search-form__box font-awesome" type="search" placeholder="&#xF002" name="s" id="s" value="<?php if(get_search_query()) echo get_search_query() ?>">
    <input class="p-search-form__button" type="submit" value="検索">
</form>
