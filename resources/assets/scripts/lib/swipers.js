import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);

export const makeSwiper = (el, options = {}) => {
  const defaults = {
    loop: true,
    pagination: {
      el: '.slab-swiper__pagination',
      clickable: true,
    },
    navigation: {
      prevEl: '.slab-swiper__button-prev',
      nextEl: '.slab-swiper__button-next',
    },
  };

  return new SwiperCore(el, Object.assign({}, defaults, options));
};

export const multiSwiper = (el, options = {}) => {
  const defaults = {
    navigation: {
      prevEl: '.slab-swiper__button-prev',
      nextEl: '.slab-swiper__button-next',
    },
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,

    breakpoints: {
      764: {
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: false,
      },
      980: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
    },
  };

  return new SwiperCore(el, Object.assign({}, defaults, options));
};

export const initSliders = () => {
  const swiperEls = document.querySelectorAll('.slab-swiper');
  const multiEls = document.querySelectorAll('.slab-multi-swiper');

  Array.prototype.forEach.call(swiperEls, makeSwiper);
  Array.prototype.forEach.call( multiEls, multiSwiper);
};
