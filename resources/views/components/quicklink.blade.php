<div class="quicklink">
  @if ($icon)
  {!! wp_get_attachment_image($icon, 'thumbnail', true, ['class' => 'quicklink__icon']) !!}
  @endif
  <a href="{{ $url }}" class="quicklink__link" target="{{ $target ?: '_self' }}">
    {!! $title !!}
  </a>
</div>
