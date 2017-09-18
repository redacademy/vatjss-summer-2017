function openTab(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.width = "0";
      tabcontent[i].style.height = "0";
      tabcontent[i].style.overflow = "hidden";
      tabcontent[i].style.padding = "0";
      tabcontent[i].style.display = "none";
      tabcontent[i].style.backgroundColor = "transparent";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.width = "auto";
  document.getElementById(cityName).style.display = "block";
  document.getElementById(cityName).style.height = "auto";
  document.getElementById(cityName).style.padding = "30px 15px";
  document.getElementById(cityName).style.backgroundColor = "#971e16";
  evt.currentTarget.className += " active";
}

(function($){
   var wpcf7Elm = document.querySelector( '.wpcf7' );
   
   wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
       $('.wpcf7-form').append( '<section class="alert-gradient"><div class="alert"><h3>Thank You!</h3> <p>Your message has been received. One of the staff from the department you requested service from will be in touch with you.</p> <div class="close-alert">X</div></div></section>');
       $('.close-alert').on('click', function() {
            if ( '366' == event.detail.contactFormId ) {
                $('.alert-gradient').addClass('alert-close');
                $('.wpcf7-mail-sent-ok').addClass('alert-close');
            }
       })
   }, false );
}(jQuery));