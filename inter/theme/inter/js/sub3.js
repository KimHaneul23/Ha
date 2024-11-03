$(document).ready(function(){

    $(".s31_c05_bg").each(function () {
        var hold = $(this);

        var _scroll = function () {
            var i;
            var p = (
                ($(window).scrollTop() + $(window).outerHeight() - hold.offset().top) / hold.outerHeight()
            ).toFixed(3);
            //console.log(p);

            if (p >= 1.2 && p <= 2) {
                i = p-1.2;
            } else if (p < 1.2) {
                i = 0;
            } else if (p > 2) {
                i = 1;
            }

            hold.css({
                "opacity": i,
            });
        };

        _scroll();
        $(window).on("scroll resize", _scroll);
    });

    $(".s31_c05_bg").each(function () {
        var hold = $(this);

        var _scroll = function () {
            var i;
            var p = (
                ($(window).scrollTop() + $(window).outerHeight() - hold.offset().top) / hold.outerHeight()
            ).toFixed(3);

            if (p >= 1.2 && p <= 2) {
                i = p-1.2;
            } else if (p < 1.2) {
                i = 0;
            } else if (p > 2) {
                i = 1;
            }

            $(".s31_c05_bg2").css({
                "opacity": i,
            });
        };

        _scroll();
        $(window).on("scroll resize", _scroll);
    });

});





