(function($) {
  $("a[href^='#']").on('click', function(event) {
    
    if (this.hash) {
      event.preventDefault();

      var hash = this.hash;
      var focus = $(hash);

      $('html, body').stop().animate({
        'scrollTop': focus.offset().top - 120
      }, 400, 'swing', function(){
        window.location.hash = hash;
      });
    }
  });
}(jQuery));