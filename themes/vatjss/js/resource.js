(function($){
  $('.resource-accordion-button').on('click', function(){
    if ( $(this).next().hasClass('resource-accordion-toggle-on') ) {
      $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
      $('.button-chevron').removeClass('button-chevron-toggle-on');
      $(this).removeClass('resource-accordion-button-toggle-on');
    } else {
      $('.button-chevron').removeClass('button-chevron-toggle-on');
      $('.resource-accordion-button').removeClass('resource-accordion-button-toggle-on');
      $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
      $(this).next().addClass('resource-accordion-toggle-on');
      $(this).children('.button-chevron').addClass('button-chevron-toggle-on');
      $(this).addClass('resource-accordion-button-toggle-on');
    }
  });

  var windowWidth = window.innerWidth;
  applyFunctionality(windowWidth);

  $(window).resize(function(windowWidth) {
    $('.resource-accordion-section').unbind();
    $('.button-chevron').unbind();
    $('.resource-toggle-mobile').unbind();
    $('.resource-list-page').unbind();
    $('.housing-toggle').unbind();
    $('.community-toggle').unbind();
    $('.justice-toggle').unbind();
    $('a[href^="#"]').unbind();
    windowWidth = window.innerWidth;
    applyFunctionality(windowWidth);
  });

  function applyFunctionality(windowW){
    if ( windowW <= 768 ){
      $('.housing-toggle').on('click', function(){
        $('.resource-toggle-mobile').removeClass('resource-toggle-mobile-on');
        $('.resource-list-page').removeClass('resource-toggle-on');
        $('.housing-resource-list').addClass('resource-toggle-on');
        $('.housing-toggle').addClass('resource-toggle-mobile-on');
      });

      $('.justice-toggle').on('click', function(){
        $('.resource-toggle-mobile').removeClass('resource-toggle-mobile-on');
        $('.resource-list-page').removeClass('resource-toggle-on');
        $('.justice-resource-list').addClass('resource-toggle-on');
        $('.justice-toggle').addClass('resource-toggle-mobile-on');
      });

      $('.community-toggle').on('click', function(){
        $('.resource-toggle-mobile').removeClass('resource-toggle-mobile-on');
        $('.resource-list-page').removeClass('resource-toggle-on');
        $('.community-resource-list').addClass('resource-toggle-on');
        $('.community-toggle').addClass('resource-toggle-mobile-on');
      });
    }
    if ( windowW >= 769 ) {
      $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
          event.preventDefault();

          if (this.hash) {

            var hash = this.hash;
            var focus = $(hash);

            $('html, body').stop().animate({
              'scrollTop': focus.offset().top - 120
            }, 400, 'swing', function(){
              window.location.hash = focus.offset().top -120;
            });
          }
        });
      });
    }
  }
}(jQuery));