// Run once the document is ready.
// var body = document.getElementsByTagName('body');
if ($('body:not(.home)') && $(window).width() > 768 && $('article').height() > 700 || $('.blog-posts').height() > 700) {
  
  window.onscroll = function () { myFunction() };
  var sidebar, search, sticky, docheight;
  
  document.addEventListener('DOMContentLoaded', function() {
    sidebar = document.querySelector('.sidebar-wrapper');
    search = document.querySelector('.search-bar');
    sticky = sidebar.offsetTop + search.offsetHeight;
    docheight = document.body.offsetHeight;
  });
  
  function myFunction() {
    if (window.pageYOffset > sticky + 75 && window.pageYOffset < docheight-1085) {
      sidebar.classList.remove('absolute');
      sidebar.classList.add("col-md-3","fixed");
    } else {
      sidebar.classList.remove("col-md-3", "fixed");
    }
    if (window.pageYOffset > docheight - 1085) {
      sidebar.classList.remove("col-md-3",'fixed');
      sidebar.classList.add('absolute');
    }
  }
  
}

$(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 1) {
      $('#backTop').addClass('active-2');
    } else if ($(this).scrollTop() == 0) {
      $('#backTop').removeClass('active-2');
    }

  });
  
  $('#backTop').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $('html').offset().top }, 0);
  });
  
  $('#close').on('click', function() {
    $('.modal-1').removeClass('active-1');
  });
  
  //modal image index
  var index, src;

  function plusSlide(n) {
    var imglength = $('.img-gallery').length;
    index += n;
    if (index > imglength-1) {
      index = 0;
    } else if(index < 0) {
      index = imglength-1;
    }
    src = $('.img-gallery').eq(index).find('img').attr('src');
    $('.img-modal').attr('src', src);
  }

  $('.img-gallery').on('click', function(){
    $('.modal-1').addClass('active-1');
    index = $(this).index();
    src = $(this).find('img').attr('src');
    $('.img-modal').attr('src', src);
  });

  $('#next').on('click', function() {
    plusSlide(1);
  });
  
  $('#prev').on('click', function() {
    plusSlide(-1);
  });

  $('#openNav').on('click', function() {
    
    if ($('nav').hasClass('active')) {
      $('nav').removeClass('active');
      $(this).find('i').toggleClass('fa-bars fa-times');
      
    } else {
      $('nav').addClass('active');
      
      $(this).find('i').toggleClass('fa-bars fa-times');
    }
    
  });

});