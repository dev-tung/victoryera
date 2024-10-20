// Main menu
var swiper = new Swiper(".slider__main", {
    grabCursor: true,
    pagination: {
        el: ".slider__main .swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
    autoplay: {
        delay: 5000,
    },
});

// Brand row
var swiper = new Swiper(".brand__latest", {
    slidesPerView: 5,
    spaceBetween: 0,
    grabCursor: true,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".brand-row-header__btn--prev",
        prevEl: ".brand-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        "@0.65": {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 0,
        },
        "@1.65": {
            slidesPerView: 4,
            spaceBetween: 0,
        },
        "@2.00": {
            slidesPerView: 5,
            spaceBetween: 0,
        },
    }
});

// Product row
var swiper = new Swiper(".product__latest", {
    slidesPerView: 5,
    spaceBetween: 5,
    grabCursor: true,
    navigation: {
        nextEl: ".product-row-header__btn--prev",
        prevEl: ".product-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 5,
        },
        "@0.65": {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 5,
        },
        "@1.65": {
            slidesPerView: 4,
            spaceBetween: 5,
        },
        "@2.00": {
            slidesPerView: 5,
            spaceBetween: 5,
        },
    }
});

// Post row
var swiper = new Swiper(".post__latest", {
    slidesPerView: 5,
    spaceBetween: 5,
    grabCursor: true,
    navigation: {
        nextEl: ".post-row-header__btn--prev",
        prevEl: ".post-row-header__btn--next",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1
        },
        "@0.65": {
            slidesPerView: 2,
            // spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            // spaceBetween: 25,
        },
        "@1.65": {
            slidesPerView: 4,
            // spaceBetween: 25,
        },
        "@2.00": {
            slidesPerView: 5,
            // spaceBetween: 30,
        },
    }
});

// Detail
var swiper = new Swiper(".product__detail .product-detail-left__thumbslide", {
    spaceBetween: 5,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper2 = new Swiper(".product__detail .product-detail-left__featuredslide", {
    spaceBetween: 5,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

var swiper = new Swiper(".section--bestseller .section__swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: {
      delay: 2500
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,
        spaceBetween: 30
        },
        // when window width is >= 992px
        992: {
        slidesPerView: 2,
        spaceBetween: 30
        },
        // when window width is >= 1200px
        1200: {
        slidesPerView: 4,
        spaceBetween: 30
        }
    },
    navigation: {
        nextEl: ".section--bestseller .section-navslide__btn--next",
        prevEl: ".section--bestseller .section-navslide__btn--previous",
    }

});


var swiper = new Swiper(".section--northern .section__swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,
        spaceBetween: 30
        },
        // when window width is >= 992px
        992: {
        slidesPerView: 2,
        spaceBetween: 30
        },
        // when window width is >= 1200px
        1200: {
        slidesPerView: 4,
        spaceBetween: 30
        }
    },
    navigation: {
        nextEl: ".section--northern .section-navslide__btn--next",
        prevEl: ".section--northern .section-navslide__btn--previous",
    }

});


var swiper = new Swiper(".section--southern .section__swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,
        spaceBetween: 30
        },
        // when window width is >= 992px
        992: {
        slidesPerView: 2,
        spaceBetween: 30
        },
        // when window width is >= 1200px
        1200: {
        slidesPerView: 4,
        spaceBetween: 30
        }
    },
    navigation: {
        nextEl: ".section--southern .section-navslide__btn--next",
        prevEl: ".section--southern .section-navslide__btn--previous",
    }

});


var swiper = new Swiper(".section--central .section__swiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,
        spaceBetween: 30
        },
        // when window width is >= 992px
        992: {
        slidesPerView: 2,
        spaceBetween: 30
        },
        // when window width is >= 1200px
        1200: {
        slidesPerView: 4,
        spaceBetween: 30
        }
    },
    navigation: {
        nextEl: ".section--central .section-navslide__btn--next",
        prevEl: ".section--central .section-navslide__btn--previous",
    }

});

var swiper = new Swiper(".section__swiper--three", {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 1200px
      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    },
    navigation: {
      nextEl: ".section-navslide__btn--next",
      prevEl: ".section-navslide__btn--previous",
    }
  
});