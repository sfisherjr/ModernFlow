$("#nav_home").click(function() {
    $('html, body').animate({
        scrollTop: $("#logo-page").offset().top
    }, 2000);
});

$("#nav_juice").click(function() {
    $('html, body').animate({
        scrollTop: $("#juice-page").offset().top
    }, 2000);
});

$("#nav_mods").click(function() {
    $('html, body').animate({
        scrollTop: $("#mod-page").offset().top
    }, 2000);
});

$("#nav_contact").click(function() {
    $('html, body').animate({
        scrollTop: $("#final-page").offset().top
    }, 2000);
});

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if (scroll > 0)
    {
        $(".nav-container").addClass("scrolling");
    }
    else if (scroll <= 0)
    {
        $(".nav-container").removeClass("scrolling");
    }
});
