<div class="card">
  @if ($image)
  {!! wp_get_attachment_image($image, 'medium', false, ['class' => 'card-img-top']) !!}
  @endif
  <div class="card-body">
    <h5 class="card-title">{!! $title !!}</h5>
    <p class="card-text">
      {!! $content !!}
    </p>
    @if ($link)
    <a href="{{ $link['url'] }}" class="btn btn-primary stretched-link" target="{{ $link['target'] ?: '_self' }}">
      {!! $link['title'] !!}
    </a>
    @endif
  </div>
</div>
