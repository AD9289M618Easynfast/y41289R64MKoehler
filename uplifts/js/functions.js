$(function() {
    $('.smoothscroll').bind('click.smoothscroll', function(e) {
        e.preventDefault();

        var target = this.hash,
                $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 0
        }, 900, 'swing', function() {
            window.location.hash = target;
        });
    });
});