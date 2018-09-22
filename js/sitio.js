$(window).scroll(function() {
    if ($(document).scrollTop() >= 100) {
      $('.encabezado').addClass('fondo');
    } else {
      $('.encabezado').removeClass('fondo');
    }
  });