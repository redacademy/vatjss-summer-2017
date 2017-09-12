(function($){
  console.log('function is working');
  $('.housing-toggle').on('click', function(){
    $('.housing-resource-list').addClass('resource-toggle-on');
    console.log('housing click worked');
    $('.justice-resource-list').removeClass('resource-toggle-on');
    $('.community-resource-list').removeClass('resource-toggle-on');
  });

  $('.justice-toggle').on('click', function(){
    console.log('justice click worked');
    $('.justice-resource-list').addClass('resource-toggle-on');
    $('.housing-resource-list').removeClass('resource-toggle-on');
    $('.community-resource-list').removeClass('resource-toggle-on');
  });

  $('.community-toggle').on('click', function(){
    console.log('community click worked');
    $('.community-resource-list').addClass('resource-toggle-on');
    $('.justice-resource-list').removeClass('resource-toggle-on');
    $('.housing-resource-list').removeClass('resource-toggle-on');
  });
}(jQuery));