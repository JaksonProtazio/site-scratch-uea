$(document).ready(function () {
    var heightWindow = $(window).height();
    $(window).resize(function () {
        heightWindow = $(window).height();
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > heightWindow - 50) {
            $('nav').addClass('modificar');
        } else {
            $('nav').removeClass('modificar');
        }
    });
});
