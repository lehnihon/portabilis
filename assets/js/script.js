( function( $ ) {
  new WOW().init();
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(400).queue(function (next) { 
      $(this).css({'overflow':'visible'}); next(); 
    });
  });
} )( jQuery );