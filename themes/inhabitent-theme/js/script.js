(function( $ ) {
  $('.icon-search').on('click', function(event){
    $('input[type="search"]').toggle().css('width', '200px');
  });
})( jQuery );