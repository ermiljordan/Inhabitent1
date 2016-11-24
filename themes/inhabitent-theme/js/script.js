(function( $ ) {
  $('.icon-search').on('click', function(event){
    $('input[type="search"]').animate({width:'toggle'}).css('width', '200px');
  });
})( jQuery );