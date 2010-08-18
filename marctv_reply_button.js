(function ($) {
    $(document).ready(function($) {
        $('.commentlist > li > div .reply').each(function() {
            var reply = this;
            var lastchild = $(this).parent().parent().children('.children').children(":last");
            $(reply).clone().appendTo(lastchild);
        });
    });
})(jQuery);