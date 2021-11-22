<div class="database-item bg-white transition slab-edge card position-relative">
  <div class="database-item__img-wrap d-flex justify-content-center align-items-center py-2 px-3">
    @if ($image)
      <a href="{{ $url }}" class="stretched-link text-decoration-none text-dark">
        {!! wp_get_attachment_image($image, 'medium', false, ['class' => 'database-item__img']) !!}
      </a>
    @else
      <h4 class="m-0"><a href="{{ $url }}" class="stretched-link text-decoration-none text-dark">{!! $title !!}</a></h4>
    @endif
  </div>
  <div class="database-item__content pb-3 px-3">
    <hr class="mt-0">
    <p class="database-item__text text-muted my-3">{!! $excerpt !!}</p>
    <div class="text-end">
      <div class="slab-link slab-link--arrow">Start Exploring</div>
    </div>
  </div>
</div>