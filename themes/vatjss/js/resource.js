(function($){
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
  
    $('.resource-accordion-button').on('click', function(){
      if ( $(this).next().hasClass("resource-accordion-toggle-on") ) {
        $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
        $(this).children('.button-chevron').removeClass('button-chevron-toggle-on');
        return;
      }
      $('.resource-accordion-section').removeClass('resource-accordion-toggle-on');
      $(this).next().addClass('resource-accordion-toggle-on');
      $(this).children('.button-chevron').addClass('button-chevron-toggle-on');
    });
}(jQuery));