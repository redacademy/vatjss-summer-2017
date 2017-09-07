(function($) {
  // Search icon animation
  $('#search-form-input .icon-search').click(function(){
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
})(jQuery);