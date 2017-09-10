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
  var acc = document.getElementsByClassName("accordion-services");
  var i;
  for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");
  
          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
              panel.style.display = "none";
          } else {
              panel.style.display = "block";
          }
      }
  }
  $('#vatjss-justice-service-carousel .circle-container button').click(function(){
    var stepClick = '#vatjss-justice-service-step-' + this.value;
    $( "#vatjss-justice-service-carousel .vatjss-justice-service-step" ).removeClass( "active" );
    $( "#vatjss-justice-service-carousel "+ stepClick ).addClass( "active" );
  });
})(jQuery);