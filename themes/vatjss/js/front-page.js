(function($) {
  $('.subscribe').on('click', function(event) {
    event.preventDefault();
    if($(this).next().hasClass('on-subscribe-click') ) {
      $('.on-subscribe').removeClass('on-subscribe-click');
      $('vatjss-sidebar-widget').removeClass('.vatjss-sidebar-widget-click');
      $('.close').removeClass('close-click');
      return;
    }
    $('.on-subscribe').addClass('on-subscribe-click');
    $('.vatjss-sidebar-widget').addClass('vatjss-sidebar-widget-click');
    $('.close').addClass('close-click');
  });

  $('.close').on('click', function() {
    $('.on-subscribe').removeClass('on-subscribe-click');
    $('.vatjss-sidebar-widget').removeClass('vatjss-sidebar-widget-click');
    $('.close').removeClass('close-click');
  });
}(jQuery));