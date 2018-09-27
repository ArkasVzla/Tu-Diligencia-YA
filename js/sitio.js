$(window).scroll(function() {
  if ($(document).scrollTop() >= 100) {
    $('.encabezado').addClass('fondo');
  } else {
    $('.encabezado').removeClass('fondo');
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() >= 1400) {
    $('.encabezado').addClass('fondo1');
  } else {
    $('.encabezado').removeClass('fondo1');
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() >= 2300) {
    $('.encabezado').addClass('fondo2');
  } else {
    $('.encabezado').removeClass('fondo2');
  }
});

$(window).scroll(function() {
  if ($(document).scrollTop() >= 3100) {
    $('.encabezado').addClass('fondo3');
  } else {
    $('.encabezado').removeClass('fondo3');
  }
});
