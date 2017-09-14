(function($) {
  $('.subscribe').on('click', function(event) {
    event.preventDefault();
    if($(this).next().hasClass('on-subscribe-click') ) {
      $('.on-subscribe').removeClass('on-subscribe-click');
      return;
    }
    $('.on-subscribe').addClass('on-subscribe-click');
  })
}(jQuery));