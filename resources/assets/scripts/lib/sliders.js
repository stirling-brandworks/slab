import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);

export const initSliders = () => {
  const swiperEls = document.querySelectorAll('.slab-swiper');

  Array.prototype.forEach.call(swiperEls, (swiperEl) => {
    new SwiperCore(swiperEl, {
      preloadImages: false,
      lazy: true,
      pagination: {
        el: '.slab-swiper__pagination',
      },
      navigation: {
        prevEl: '.slab-swiper__button-prev',
        nextEl: '.slab-swiper__button-next',
      },
    });
  });
};
