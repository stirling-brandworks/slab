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

export const initSliders = () => {
  const swiperEls = document.querySelectorAll('.slab-swiper');

  Array.prototype.forEach.call(swiperEls, makeSwiper);
};
