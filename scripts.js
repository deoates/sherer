$(document).ready(function() {
  // smooth animate to link tags
  $('a').click(function(){
      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 500);
      return false;
  });

  $("nav select").change(function() {
    window.location = $(this).find("option:selected").attr('data-href');
  });

});





