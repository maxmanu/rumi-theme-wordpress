var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  // centeredSlides: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
  },
});

var swiperClient = new Swiper(".swiperClient", {
  slidesPerView: 1,
  spaceBetween: 30,
  // centeredSlides: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
  },
});

var swiperService = new Swiper(".single-service-swiper", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

$(document).ready(function () {
  $(".history_slides__js").slick({
    infinite: !1,
    asNavFor: ".history_date__js",
  }),
    $(".history_date__js").slick({
      swipeToSlide: !1,
      infinite: !1,
      arrows: !1,
      slidesToShow: 1,
      asNavFor: ".history_slides__js",
      centerMode: !0,
      focusOnSelect: !0,
      accesibility: !1,
      draggable: !1,
      swipe: !1,
      touchMove: !1,
      variableWidth: !0,
      responsive: [{ breakpoint: 600, settings: { slidesToShow: 1 } }],
    });
});
