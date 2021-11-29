<div class="card @if($layout == 'horizontal') card--horizontal @else card--vertical @endif position-relative">
  @if ($image)
    {!! wp_get_attachment_image($image, $imageSize, false, ['class' => 'card-img']) !!}
  @endif
  <div class="card-body">
    <h4 class="card-title">{!! $title !!}</h4>
    <p class="card-text text-muted">
      {!! $content !!}
    </p>
    @if ($link)
    <a href="{{ $link['url'] }}" class="slab-link slab-link--arrow" target="{{ $link['target'] ?: '_self' }}">
      {!! $link['title'] !!}
    </a>
    @endif
  </div>
</div>
