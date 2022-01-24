<div class="swiper-slide slab-slide mb-5">
  <div class="slab-slide__bg overflow-hidden position-absolute w-100 h-100">
    {!! wp_get_attachment_image($background_image, 'large', '', array( 'class' => 'h-100 w-100 object-fit-cover' )) !!}
  </div>
  <div class="slab-slide__content position-absolute w-50 text-center text-md-start bg-white border p-2 p-lg-3 shadow">
    <h5 class="text-dark">{{ $title }}</h5>
    <p class="text-muted">{{ $description }}</p>
    @if ($link)
    <div class="text-center text-md-end">
      <a href="{{ $link['url'] }}" class="slab-slide__link slab-link slab-link--arrow" target="{{ $link['target'] ?: '_self' }}">
        {{ $link['title'] }}
      </a>
    </div>
    @endif
  </div>
</div>
