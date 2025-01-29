(function ($) {
  'use strict';



  $('.main_menu > li > a').on("click",function () {
    var $ul = $(this).siblings('ul');
    if ($ul.length > 0) {
      $ul.slideToggle(600);
      $(".submenu").not($ul).slideUp(400);
      return false;
    }
  });



  var button = document.querySelector(".mobile_menu_btn .icon");
  var menu_wrap = document.getElementById('menu_wrap');
  var bar_close = document.getElementById('bar_close')
  button.addEventListener('click', function () {

    if (menu_wrap.classList.contains("open-mobilemenu")) {
      bar_close.classList.replace("ti-close", "ti-align-justify")
      menu_wrap.classList.remove("open-mobilemenu");
    } else {
      menu_wrap.classList.add("open-mobilemenu");
      bar_close.classList.replace("ti-align-justify", "ti-close")
    }
  });

  let header_right = document.querySelector(".search_icon");
  let searchBox = document.querySelector(".bx-search");
  searchBox.addEventListener("click", () => {
    header_right.classList.toggle("active");
    if (header_right.classList.contains("active")) {
      searchBox.classList.replace("bx-search", "ti-close");
    } else {
      searchBox.classList.replace("ti-close", "bx-search");
    }
  });


 



  /* brand_slider  */
  $('.brand_slider').slick({
    // infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 399,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  /* causes_slider */
  $('.causes_slider').slick({
    // infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    arrows: false,
    responsive: [{
        breakpoint: 1399,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });


  /* testimonial_slider */
  $('.testimonial_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
  });

  /*   testimonial_slider_s3 */
  $('.testimonial_slider_s3').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
     
    ]
  });

  /* slider_happy  */
  $('.slider_happy').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
  });




  $(function () {
    $("#datepicker").datepicker();
  });



  /* top to bottom js */
  var btn = $('#button');

  $(window).on("scroll",function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });



  $('.hero_slider').slick({
    autoplay: true,
    speed: 1000,
    lazyLoad: 'progressive',
    autoplay: true,
    fade: true,
    dots: true,
  }).slickAnimation();




  /* WATCH VIDEO */

  $('.popup-youtube').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  /*   counter UP */
  $(document).ready(function () {
    $('.count').counterUp({
      delay: 10,
      time: 1500
    });
  });

  let items = document.querySelectorAll('.feature_item');
  items.forEach(item => item.addEventListener('mouseenter', function () {
    handleHover(this, items)
  }))

  function handleHover(el) {
    items.forEach(item => {
      item.classList.remove('active')
      item.classList.add('item')
    })

    el.classList.add('active')
  }


      
     

  /*------------------------------------------
      = WOW ANIMATION SETTING
  -------------------------------------------*/
  var wow = new WOW({
      boxClass: 'wow', // default
      animateClass: 'animated', // default
      offset: 0, // default
      mobile: true, // default
      live: true // default
  });

 //active wow
 wow.init();


})(jQuery)


function openNav() {
  // document.getElementById("mobile_cart").style.width = "320px";
  document.getElementById("mobile_cart").style.right = "0";
}

function closeNav() {
  // document.getElementById('mobile_cart').style.width = "0";
  document.getElementById("mobile_cart").style.right = "-100%";
}
