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

     $("button.menu-toggle").click(function(){
        $("ul.menu").slideToggle("fast");
    });

   
    // chane image on hover tab
      $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
      $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function () {
        $(this).tab('show');
      });

   $( "#header-search" ).click(function() {
      $( "div#top-search" ).toggle( "1000", function() {
        // Animation complete.
      });
    });

   $( "i#header-share" ).click(function() {
      $( "div#social-header" ).toggle( "1000", function() {
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
   $(document).ready(function() {
        $('.banner-content-wrapper h1').each(function(index, element) {
            var heading = $(element);
            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces
            last_word = word_array.pop();             // pop the last word
            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span class="last-word">', last_word, '</span>'].join(''));
        });
    });
})(jQuery);