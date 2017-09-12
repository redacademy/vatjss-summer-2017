(function($) {

  $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    setGallerySize: false,
    cellSelector: '.carousel-cell',
    prevNextButtons: true,
    autoPlay: false,
    groupCells: 1
  });

  $("a").on('click', function(event) {

    if (this.hash !== ""){
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
})(jQuery);