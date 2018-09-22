$(window).scroll(function () {
    var nav = $('.header');
    var scroll = $(window).scrollTop();

    if (scroll >= 100){
        nav.addClass("fondo");
    }else{
        nav.removeClass("fondo");
    }
});