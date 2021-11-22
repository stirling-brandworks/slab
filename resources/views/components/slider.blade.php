<div class="swiper-container slab-swiper slab-swiper--single">
  <div class="swiper-wrapper">
    @foreach ($slides as $slide)
    @include('components.slide', $slide)
    @endforeach
  </div>

  <div class="swiper-pagination slab-swiper__pagination"></div>
  <div class="swiper-button-prev slab-swiper__button-prev"></div>
  <div class="swiper-button-next slab-swiper__button-next"></div>
</div>
