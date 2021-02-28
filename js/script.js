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
    $('.c-button__close, .l-contents__right').toggleClass('is-open');
});
