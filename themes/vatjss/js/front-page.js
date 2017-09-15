(function($) {
  // Search icon animation
  $('#search-form-input .icon-search').click(function(){
    console.log('test');
    $('#search-form-input .search-field').toggleClass('search-field-focus');
    $('#site-navigation .vatjss-mobile-logo').toggleClass('hide-item');
    $('#vatjss-nav-menu').toggleClass('hide-item');
  });
  $('#search-form-input .search-field').focusout(function(){
    if($('#search-form-input .search-field').hasClass('search-field-focus')){
      $('#search-form-input .search-field').removeClass('search-field-focus');
      $('#site-navigation .vatjss-mobile-logo').removeClass('hide-item');
      $('#vatjss-nav-menu').removeClass('hide-item');
    }
  });
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