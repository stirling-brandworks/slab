<div class="swiper-slide slab-slide">
  <div class="slab-slide__bg overflow-hidden">
    {!! wp_get_attachment_image($background_image, 'large') !!}
  </div>
  <div class="slab-slide__content text-center text-md-start bg-white slab-edge border p-2 p-lg-3">
    <h5 class="text-dark">{{ $title }}</h5>
    <p class="text-muted">{{ $description }}</p>
    @if ($link)
    <div class="text-center text-md-end">
      @include('components.slab-link')
    </div>
    @endif
  </div>
</div>
