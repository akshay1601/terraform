$(document).ready(function () {
  // Carousel Functions
  $("#homeCarousel").slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $("#expert-ideas-carousel").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
    prevArrow:
      '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#similar-ideas-carousel").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
    prevArrow:
      '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // coupon active state function
  $(".coupons .blue-outline-btn").click(function () {
    $(".coupons .blue-outline-btn").removeClass("active");
    $(this).addClass("active");
  });

  // idea filter active
  $(".idea-filter .filter-btn").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else {
      $(this).addClass("active");
    }
  });

  $(".idea__units .btn-unit").click(function (e) {
    e.preventDefault();
    $(".idea__units .btn-unit").removeClass("active");
    $(this).addClass("active");
  });

  $(".collapse .search-input").focus(function () {
    $(".search-results").show();
    $(".search-icon").hide();
    $(".recent-icon").show();
  });

  $(".collapse .search-input").keypress(function () {
    $(".search-results").show();
    $(".search-icon").show();
    $(".recent-icon").hide();
  });

  $(".collapse .search-input").blur(function () {
    $(".search-results").hide();
  });

  $(".visibility-box").click(function () {
    $(".check_bold").hide();
    $(this).find(".check_bold").show();
  });

  // modal auth flow functions
  $("#continue-with-number").click(function () {
    $("#signIn-with-email").hide();
    $("#signIn-with-number").show();
  });
  $("#continue-with-email").click(function () {
    $("#signIn-with-number").hide();
    $("#signIn-with-email").show();
  });
  $(".go-to-otp").click(function () {
    $("#signIn-login").hide();
    $("#enter-otp").show();
  });
  $(".go-to-personalDetails").click(function () {
    $("#enter-otp").hide();
    $("#personal-details").show();
  });
  $(".go-to-myPreferenceOne").click(function () {
    $("#personal-details").hide();
    $("#my-preference-cp-add").hide();
    $("#my-preference-cp-edit").hide();
    $("#my-preference-one").show();
  });
  $(".my-preference-cp-add").click(function () {
    $("#my-preference-one").hide();
    $("#my-preference-cp-add").show();
  });
  $(".my-preference-cp-edit").click(function () {
    $("#my-preference-one").hide();
    $("#my-preference-cp-edit").show();
  });

  $(".back-arrow-preference").click(function () {
    $("#my-preference-cp-add").hide();
    $("#my-preference-cp-edit").hide();
    $("#my-preference-one").show();
  });

  $(".go-to-myPreferenceTwo").click(function () {
    $("#my-preference-one").hide();
    $("#my-preferenceTwo").show();
  });
  $(".go-to-myPreferenceThree").click(function () {
    $("#my-preferenceTwo").hide();
    $("#my-preferenceThree").show();
  });
  $(".go-to-myPreferenceFour").click(function () {
    $("#my-preferenceThree").hide();
    $("#my-preferenceFour").show();
  });
  $(".go-to-myPreferenceFive").click(function () {
    $("#my-preferenceFour").hide();
    $("#my-preferenceFive").show();
  });
  $(".go-to-myPreferenceSix").click(function () {
    $("#my-preferenceFive").hide();
    $("#my-preferenceSix").show();
  });
});
