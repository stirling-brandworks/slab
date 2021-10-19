<div class="swiper-slide slab-slide">
  <div class="slab-slide__bg">
    {!! wp_get_attachment_image($background_image, 'large') !!}
  </div>
  <div class="slab-slide__overlay"></div>
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
