$(document).ready(function() {
    $(window).scroll(function(e) {
        var s = $(window).scrollTop(),
        	handicap = $(window).innerHeight();
            opacityVal = (s / (200 * (handicap/s)));
        $('.blurred-image').css('opacity', opacityVal);
    });

    $(document).foundation();

});