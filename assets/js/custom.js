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
            arrows: true,
            slidesToShow: 1,
            dots: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1,
            dots: false
          }
        }
      ]
    });

    $('.clients-slider').slick({
      slidesToShow: 5,
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
            slidesToShow: 2
          }
        }
      ]
    });

    $("button.menu-toggle").click(function () {
      $("ul.menu").slideToggle("fast");
    });


    // chane image on hover tab
    $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
    $(document).on('mouseenter.bs.tab.data-api', '[data-hover="tab"]', function () {
      $(this).tab('show');
    });

    $(document).on( 'hover', '.tab-heading', function () {     
      jQuery(this).tab('show');
    });

    $("#header-search").click(function () {
      $('div#social-header').delay(350).fadeOut('fast'); 
      $("div#top-search").slideToggle("1000", function () {
        // Animation complete.
      });
    });

    $("i#header-share").click(function () {
      $('div#top-search').fadeOut('fast'); 
      $("div#social-header").slideToggle("1000", function () {
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
          'bottom': 40
        });
      } else {
        $('#gotop').css({
          'bottom': -100
        });
      }
    });

    /* change last color of banner heading */
    $('.banner-content-wrapper h1').each(function (index, element) {
      var heading = $(element);
      var word_array, last_word, first_part;

      word_array = heading.html().split(/\s+/); // split on spaces
      last_word = word_array.pop(); // pop the last word
      first_part = word_array.join(' '); // rejoin the first words together

      heading.html([first_part, ' <span class="last-word">', last_word, '</span>'].join(''));
    });
  });

/* pre loader */
$(window).on('load', function() { 
  $('#status').fadeOut();  
  $('#preloader').delay(350).fadeOut('slow'); 
  $('body').delay(350).css({'overflow':'visible'});
})

})(jQuery);