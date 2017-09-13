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
})(jQuery);