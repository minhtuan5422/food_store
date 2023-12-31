var timeLabels = [
  "Tháng 1",
  "Tháng 2",
  "Tháng 3",
  "Tháng 4",
  "Tháng 5",
  "Tháng 6",
  "Tháng 7",
  "Tháng 8",
  "Tháng 9",
  "Tháng 10",
  "Tháng 11",
  "Tháng 12",
];
var revenueData = [
  1000, 1500, 1200, 1800, 2000, 1600, 1000, 1500, 1200, 1800, 2000, 1600,
];
var salesData = [50, 70, 60, 80, 90, 75, 50, 70, 60, 80, 90, 75];

$(document).ready(function () {
  /* Create chart */
  var ctx = $("#myChart");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: timeLabels,
      datasets: [
        {
          label: "Doanh thu",
          data: revenueData,
          backgroundColor: "rgba(75, 192, 192, 0.2)",
          borderColor: "rgba(75, 192, 192, 1)",
          borderWidth: 1,
        },
        {
          label: "Bán hàng",
          data: salesData,
          backgroundColor: "rgba(255, 99, 132, 0.2)",
          borderColor: "rgba(255, 99, 132, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  /* Slick slider */
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
    /* Handle tab user dashboard */
    let tabContent = $(".user__content");
    for (let i = 1; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }

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

  if ($(window).width() < 992) {
    $(".js-action-gallery").click(function () {
      $(".filter-body").append($(".js-add-modal"));
    });
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

  rotateIconCollapseTab("tab__product--expand", "tab__product--icon");

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

  $(".js-product-detail").click(function (e) {
    var productId = $(".idProductDetail").val();
    var currentUrl = window.location.href;
    var newUrl = currentUrl + "?product_id=" + productId;
    window.location.href = newUrl;
    e.preventDefault();
  });

  $(".js-decrement-quantity").css({
    opacity: "0.2",
    cursor: "no-drop",
  });

  /* AJAX HANDLER */
  /* Lấy ra id sản phẩm cần xóa */
  $(".delete-product-btn").on("click", function () {
    const productId = $(this).data("id");
    $("#hiddenProductId").val(productId);
  });

  /* Ajax id sản phẩm cần xóa đến file xử lý php */
  $(".js-delete-product").click(function (e) {
    e.preventDefault();
    var productId = $("#hiddenProductId").val();
    console.log(productId); // Kiểm tra giá trị của productId

    $.ajax({
      url: "./mvc/controllers/Admin.php",
      type: "POST",
      data: { productId: productId },
      success: function () {
        alert("Remove product successfully");
        $(".modal-backdrop").hide();
        $("#removeConfirm").hide();
      },
      error: function () {
        console.log("Error when delete product!");
      },
    });
  });

  $(".update-product-btn").click(function (e) {
    e.preventDefault();
    const productId = $(this).data("id");

    $.ajax({
      url: "./mvc/models/ProductModel.php",
      type: "POST",
      data: { productUpdateId: productId },
      success: function () {
        console.log(productId);
      },
      error: function () {
        console.log("Not found product ID");
      },
    });
  });

  $(".js-submit-login").click(function () {
    var email = $(".js-email-login").val();
    var password = $(".js-password-login").val();

    console.log(email + password);

    $.ajax({
      url: "./mvc/controllers/Login.php",
      type: "POST",
      data: { email: email, password: password },
      dataType: "json",
      success: function (response) {
        if (response.status === "admin") {
          alert("Nhân viên đăng nhập thành công!");
          window.location.href = "/admin";
        } else if (response.status === "staff") {
          alert("Khách hàng đăng nhập thành công!");
          window.location.href = "/";
        } else if (response.status === "error") {
          alert("Tài khoản hoặc mật khẩu không chính xác!");
          window.location.href = "/login";
        }
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error: " + xhr.responseText);
      },
    });
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

function rotateIconCollapseTab(button, icon) {
  var clickCount = 0;

  $("." + button).click(function () {
    clickCount++;
    let rotateDegree = clickCount % 2 === 0 ? 90 : 270;
    $("." + icon).css("transform", "rotate(" + rotateDegree + "deg)");
  });
}

// tabs
const tabLinks = $(".tablinks");
const tabContent = $(".tabcontent");

tabLinks.on("click", openTabs);

function openTabs(e) {
  var btnTarget = $(e.currentTarget);
  var section = btnTarget.data("section");

  tabContent.removeClass("active");
  tabLinks.removeClass("active");

  $("#" + section).addClass("active");
  btnTarget.addClass("active");
}

//Hanlde button increase/decrease number product
$(".js-increment-quantity").click(function (event) {
  event.preventDefault();
  let numberProduct = $(".product-detail__right--action--quantity");
  let currentNumber = parseInt(numberProduct.val());
  let increment = currentNumber + 1;
  numberProduct.val(increment);

  $(".js-decrement-quantity").css({
    opacity: "1",
    cursor: "pointer",
  });
});

$(".js-decrement-quantity").click(function (event) {
  event.preventDefault();
  let numberProduct = $(".product-detail__right--action--quantity");
  let currentNumber = parseInt(numberProduct.val());
  let increment;

  if (currentNumber > 1) {
    $(this).css({
      opacity: "1",
      cursor: "pointer",
    });
    increment = currentNumber - 1;
  } else {
    increment = 1;
    $(".js-decrement-quantity").css({
      opacity: "0.2",
      cursor: "no-drop",
    });
  }
  numberProduct.val(increment);
});
