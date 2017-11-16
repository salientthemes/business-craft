//scroll down
(function ($) {
  $(document).ready(function () {
    //slick slider 
    $('.banner-wrapper').slick({
      slidesToShow: 1,
      dots: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3500,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    }); 

     $('.clients-slider').slick({
      slidesToShow:5,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3500,
      slidesToScroll: 5,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow:2
          }
        }
      ]
    }); 
   $( "#header-search" ).click(function() {
      $( "div#top-search" ).toggle( "1000", function() {
        // Animation complete.
      });
    });
   // back to top animation

  $('#gotop').click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 1000);
    return false;
  });


  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('header#masthead').addClass('fixed');
    } else {
        $('header#masthead').removeClass('fixed');
    }
});

  $(window).scroll(function () {
    var scrollTopPosition = $('html, body').scrollTop();
    if (scrollTopPosition > 240) {
      $('#gotop').css({
        'bottom': 25
      });
    } else {
      $('#gotop').css({
        'bottom': -100
      });
    }
  });
  });
})(jQuery);