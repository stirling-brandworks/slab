<div class="quicklink">
  @if ($icon)
  {!! wp_get_attachment_image($icon, 'thumbnail', true, ['class' => 'quicklink__icon']) !!}
  @endif
  <a href="{{ $link['url'] }}" class="quicklink__link" target="{{ $link['target'] ?: '_self' }}">
    {!! $link['title'] !!}
  </a>
</div>
