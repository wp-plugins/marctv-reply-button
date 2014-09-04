(function($) {
  $(document).ready(function($) {
    $('.commentlist > li > div .reply').each(function() {
      var reply = this;
      var lastchild = $(reply).parent().parent().children('.children').children(":last");
      var lastidstring = ($(reply).parent().parent().children('.children').children(":last").attr("id"));

      if (lastidstring !== undefined) {
        var lastid = lastidstring.replace('li-comment-', '');
        $(reply).clone().children('a').attr('onclick', $(reply).children('a').attr('onclick').replace(/comment\-(\d+)/g, 'comment-' + lastid)).appendTo(lastchild);
      }
    });
  });
})(jQuery);
