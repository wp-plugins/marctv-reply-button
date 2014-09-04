(function($) {
  $(document).ready(function($) {
    $('.commentlist > li > div .reply').each(function() {
      var reply = this;
      var lastchild = $(reply).parent().parent().children('.children').children(":last");
      var lastidstring = ($(reply).parent().parent().children('.children').children(":last").attr("id"));

      if (lastidstring !== undefined && $(reply).children('a').attr('onclick') !== undefined) {
        var lastid = lastidstring.replace('li-comment-', '');
        var newtarget = $(reply).children('a').attr('onclick').replace(/comment\-(\d+)/g, 'comment-' + lastid);
        
        $(reply).clone().children('a').attr('onclick', newtarget).appendTo(lastchild);
      }
    });
  });
})(jQuery);
