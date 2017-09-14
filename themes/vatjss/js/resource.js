(function($){
  function resourceAccordion() {
    $('.resource-accordion-button').on('click', function(){
      if ( $(this).next().hasClass('resource-accordion-toggle-on') ) {
        $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
        $(this).children('.button-chevron').removeClass('button-chevron-toggle-on');
        $(this).removeClass('resource-accordion-button-toggle-on');
        return;
      }
      $('.resource-accordion-button').removeClass('resource-accordion-button-toggle-on');
      $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
      $(this).next().addClass('resource-accordion-toggle-on');
      $(this).children('.button-chevron').addClass('button-chevron-toggle-on');
      $(this).addClass('resource-accordion-button-toggle-on');
    });
  }
  var windowWidth = window.innerWidth;
  $(window).resize(function() {
    windowWidth = window.innerWidth;
  });
  if ( windowWidth <= 768 ){

    $('.housing-toggle').on('click', function(){
      $('.resource-list-page').removeClass('resource-toggle-on');
      $('.housing-resource-list').addClass('resource-toggle-on');
    });

    $('.justice-toggle').on('click', function(){
      $('.resource-list-page').removeClass('resource-toggle-on');
      $('.justice-resource-list').addClass('resource-toggle-on');
    });

    $('.community-toggle').on('click', function(){
      $('.resource-list-page').removeClass('resource-toggle-on');
      $('.community-resource-list').addClass('resource-toggle-on');
    });
    resourceAccordion();
  }
  if ( windowWidth >= 769 ) {
    $(document).ready(function() {
      $('a[href^="#"]').on('click', function(event) {

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
    });
    resourceAccordion();
  }
}(jQuery));