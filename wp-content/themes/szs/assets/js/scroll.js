$(document).ready(function() {
  
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 1) {
      $('.navb').addClass('bg-white').removeClass('top');
      $('#backTop').addClass('active-2');
    } else if ($(this).scrollTop() == 0) {
      $('.navb').removeClass('bg-white').addClass('top');
      $('#backTop').removeClass('active-2');
    }
  });
});