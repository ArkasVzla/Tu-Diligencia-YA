$(window).scroll(function () {
    var nav = $('.header');
    var scroll = $(window).scrollTop();

    if (scroll >= 100){
        nav.addClass("header-fondo");
    }else{
        nav.removeClass("header-fondo");
    }
});