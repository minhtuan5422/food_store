$(document).ready(function () {
  carousel("slider-single", [], {
    dots: true,
    autoplay: false,
    autoplaySpeed: 2000,
    infinity: true,
  });

  if ($(window).width() < 1024) {
    carousel("featured__policy", [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ]);
  }

  $(window).on("load", function () {
    carousel(
      "top-categories__item",
      [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 576,
          settings: {
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],

      {
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 6,
        slidesToScroll: 3,
      }
    );

    carousel(
      "best-seller__products",
      [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
         breakpoint: 425,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
         },
       }
      ],

      {
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 5,
        slidesToScroll: 3,
      }
    );

    carousel(
      "latest-article__wrapper",
      [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],

      {
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 3,
        slidesToScroll: 2,
      }
    );

    carousel(
      "feedbacks__content--body",
      [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],

      {
        dots: true,
        autoplay: false,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 3,
        slidesToScroll: 2,
      }
    );

    carousel(
      "company__logo",
      [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 425,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],

      {
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 6,
        slidesToScroll: 3,
      }
    );

    carousel(
      "featured__products--carousel",
      [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],

      {
        autoplay: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplaySpeed: 2500,
      }
    );
  });

  if ($(window).width() < 525) {
    const iconAction = $(".res-none");
    iconAction.show();
    $(".navbar-collapse").append(iconAction);
  }
});

// Carousel initial
function carousel(
  $selector,
  $responsive = [],
  $custom = {},
  $slidesToShow = 1,
  $slidesToScroll = 1
) {
  let atr = {};
  atr = {
    slidesToShow: $slidesToShow,
    slidesToScroll: $slidesToScroll,
    responsive: $responsive,
    ...$custom,
  };
  $("." + $selector).slick(atr);
}

const isTouchDevice = "ontouchstart" in document.documentElement;

if (!isTouchDevice) {
  $(".nav-item.dropdown")
    .on("mouseenter", function () {
      $(this).addClass("show");
      $(this).find(".dropdown-menu").addClass("show");
    })
    .on("mouseleave", function () {
      $(this).removeClass("show");
      $(this).find(".dropdown-menu").removeClass("show");
    });
}

/* Modal/Offcanvas Handler */

const closeOffcanvas = $(".modal-offcanvas__content--header--close");
closeOffcanvas.click(function () {
  $(".modal-offcanvas").css("animation", "backRight 0.4s ease");
});

$(".js-btn-cart").click(function () {
  $(".modal-offcanvas").css("animation", "fromRight 0.4s ease");
});

$(".modal-cart").click(function () {
  $(".modal-offcanvas").css("animation", "backRight 0.4s ease");
});
