  (function() {

    $('.img-small').on('mouseenter click', function() {
        var src = $(this).data('src');
        $('.img-large').css("background-image", "url('"+src+"')");
    });

    var imgLarge = $('.img-large');

    imgLarge.mousemove(function(event) {
        var relX = event.pageX - $(this).offset().left;
        var relY = event.pageY - $(this).offset().top;
        var width = $(this).width();
        var height = $(this).height();
        var x = (relX / width) * 100;
        var y = (relY / height) * 100;
        $(this).css("background-position", x+"% "+y+"%");
    });

    imgLarge.mouseout(function() {
        $(this).css("background-position", "center");
    });

    $( window ).resize(function() {
        setImgLarge();
        setImgSmall();
    });

    setImgLarge();
    setImgSmall();

  });

  function setImgLarge() {
    var imgLarge = $('.img-large');
    var width = imgLarge.width();
    imgLarge.height(width * 2/3);
  }

  function setImgSmall() {
    var imgSmall = $('.img-small');
    var width = imgSmall.width();
    imgSmall.height(width);
  }


  (function($) {

    "use strict";

    var initPreloader = function() {
      $(document).ready(function($) {
      var Body = $('body');
          Body.addClass('preloader-site');
      });
      $(window).load(function() {
          $('.preloader-wrapper').fadeOut();
          $('body').removeClass('preloader-site');
      });
    }

    // init Chocolat light box
    var initChocolat = function() {
      Chocolat(document.querySelectorAll('.image-link'), {
        imageSize: 'contain',
        loop: true,
      })
    }

    var initSwiper = function() {

      var swiper = new Swiper(".main-swiper", {
        speed: 500,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      var bestselling_swiper = new Swiper(".bestselling-swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        speed: 500,
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          991: {
            slidesPerView: 4,
          },
        }
      });

      var testimonial_swiper = new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        speed: 500,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      var products_swiper = new Swiper(".products-carousel", {
        slidesPerView: 4,
        spaceBetween: 30,
        speed: 500,
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          991: {
            slidesPerView: 4,
          },

        }
      });

    }

    var initProductQty = function(){

      $('.product-qty').each(function(){

        var $el_product = $(this);
        var quantity = 0;

        $el_product.find('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            $el_product.find('#quantity').val(quantity + 1);
        });

        $el_product.find('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            if(quantity>0){
              $el_product.find('#quantity').val(quantity - 1);
            }
        });

      });

    }

    // init jarallax parallax
    var initJarallax = function() {
      jarallax(document.querySelectorAll(".jarallax"));

      jarallax(document.querySelectorAll(".jarallax-keep-img"), {
        keepImg: true,
      });
    }

    // document ready
    $(document).ready(function() {
      
      initPreloader();
      initSwiper();
      initProductQty();
      initJarallax();
      initChocolat();

          // product single page
          var thumb_slider = new Swiper(".product-thumbnail-slider", {
            spaceBetween: 8,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
          });
      
          var large_slider = new Swiper(".product-large-slider", {
            spaceBetween: 10,
            slidesPerView: 1,
            effect: 'fade',
            thumbs: {
              swiper: thumb_slider,
            },
          });

      window.addEventListener("load", (event) => {
        //isotope
        $('.isotope-container').isotope({
          // options
          itemSelector: '.item',
          layoutMode: 'masonry'
        });


        var $grid = $('.entry-container').isotope({
          itemSelector: '.entry-item',
          layoutMode: 'masonry'
        });


        // Initialize Isotope
        var $container = $('.isotope-container').isotope({
          // options
          itemSelector: '.item',
          layoutMode: 'masonry'
        });

        $(document).ready(function () {
          //active button
          $('.filter-button').click(function () {
            $('.filter-button').removeClass('active');
            $(this).addClass('active');
          });
        });

        // Filter items on button click
        $('.filter-button').click(function () {
          var filterValue = $(this).attr('data-filter');
          if (filterValue === '*') {
            // Show all items
            $container.isotope({ filter: '*' });
          } else {
            // Show filtered items
            $container.isotope({ filter: filterValue });
          }
        });

      });

    }); // End of a document

  })(jQuery);

