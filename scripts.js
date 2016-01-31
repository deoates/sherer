$(document).ready(function() {
  // smooth animate to link tags
  if ($('body').hasClass('home')) {
    $('a').click(function(e){
        var href = $.attr(this, 'href')
        if (href.indexOf('/#') > -1) {
          e.preventDefault();
          href = href.substr(1)
        }
        $('html, body').animate({
            scrollTop: $( href ).offset().top
        }, 500);
        return false;
    });
  }
  $("nav select").change(function() {
    window.location = $(this).find("option:selected").attr('data-href');
  });

});





