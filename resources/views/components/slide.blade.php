<div class="swiper-slide slab-slide">
  <div class="slab-slide__bg">
    <img data-src="{{ wp_get_attachment_image_src($background_image, 'large')[0] }}" class="swiper-lazy" />
    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
  </div>
  <div class="slab-slide__content">
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
    @if ($link)
    <a href="{{ $link['url'] }}" class="slab-slide__link" target="{{ $link['target'] ?: '_self' }}">
      {{ $link['title'] }}
    </a>
    @endif
  </div>
</div>
