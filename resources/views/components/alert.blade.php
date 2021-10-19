<div class="alert alert-{{ $type }} d-flex align-items-center" role="alert">
  @if ($icon)
  {!! wp_get_attachment_image($icon, [24, 24], true, ['class' => 'me-2']) !!}
  @endif
  <span class="me-2">{!! $text !!}</span>
  @if ($link)
  <a href="{{ $link['url'] }}" class="alert-link" target="{{ $link['target'] ?: '_self' }}">{!! $link['title'] !!}</a>
  @endif
</div>
