let timer = 0;
let currentWidth = window.innerWidth;
$(window).resize(function(){
    if (currentWidth == window.innerWidth) {
        return;
    }
    if (timer > 0) {
        clearTimeout(timer);
    }

    timer = setTimeout(function () {
        location.reload();
    }, 10);
    
});


$('.p-bar__button, .c-button__close').click(function(){
    $('.c-button__close, .l-main__right, .l-main__left, .l-main').toggleClass('is-open');
    // 以下行を追加
    $('body').toggleClass('is-fixed');
});