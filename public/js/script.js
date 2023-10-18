$(document).ready(function () {
  carousel("slider-single", [], {
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500,
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
        autoplay: true,
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
        },
      ],

      {
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        infinity: true,
        slidesToShow: 5,
        slidesToScroll: 2,
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
        autoplay: true,
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
        autoplay: true,
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
        autoplay: true,
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
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplaySpeed: 2500,
      }
    );

    carousel(
      "about-team__members",
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
        autoplay: true,
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

  $(".js-action-filter").click(function () {
    $(".filter-body").append($(".product__sidebar--category"));
  });

  rotateIconCollapse(
    "product__sidebar--category--expands",
    "product__sidebar--category--icon"
  );
  rotateIconCollapse(
    "product__sidebar--price--expands",
    "product__sidebar--price--icon"
  );
  rotateIconCollapse(
    "product__sidebar--rating--expands",
    "product__sidebar--rating--icon"
  );

  /* Custom Product Detail Image */
  $h_slider_options = {
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 6,
    galleryMargin: 10,
    thumbMargin: 10,
  };

  $v_slider_options = {
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 6,
    galleryMargin: 10,
    thumbMargin: 10,
    vertical: true,
  };

  h_slider = $("#lightSlider").lightSlider($h_slider_options);
  v_slider = $("#lightSliderVertical").lightSlider($v_slider_options);
  $selector = '#lightSlider li:not(".clone") a';
  $selector += ',#lightSliderVertical li:not(".clone") a';

  $().fancybox({
    selector: $selector,
    backFocus: false,
    buttons: [
      "slideShow",
      "share",
      "zoom",
      "fullScreen",
      "thumbs",
      "download",
      "close",
    ],
  });
});

$(window).resize(function () {
  slider.destroy();
  h_slider = $("#ocassions-slider").lightSlider(h_slider_options);
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

/* Handle rotate icon sidebar */
function rotateIconCollapse(button, icon) {
  var clickCount = 0;

  $("." + button).click(function () {
    clickCount++;
    let rotateDegree = clickCount % 2 === 0 ? 270 : 90;
    $("." + icon).css("transform", "rotate(" + rotateDegree + "deg)");
  });
}
