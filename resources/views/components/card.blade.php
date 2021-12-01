<div class="card position-relative transition @if($layout == 'horizontal') card--horizontal flex-row @else card--vertical @endif position-relative">
  @if ($image)
    {!! wp_get_attachment_image($image, $imageSize, false, ['class' => 'card__img slab-edge']) !!}
  @endif
  <div class="card__body py-3 px-3 @if($image) card__body--w-img @endif">
    @if ($date)
      @include('partials.meta.date')
    @endif
    <h4 class="card__title @if($layout == 'horizontal') h5 @endif mt-1">
      @if ($link)<a href="{{ $link['url'] }}" class="stretched-link text-decoration-none text-dark" target="{{ $link['target'] ?: '_self' }}">@endif
        {!! $title !!}
      @if ($link)</a>@endif
    </h4>
    <p class="card__text text-muted">
      {!! $content !!}
    </p>
    @if ($link)
    <div class="text-end mt-2">
      <span class="slab-link slab-link--arrow">
        {!! $link['title'] !!}
      </span>
    </div>
    @endif
  </div>
</div>