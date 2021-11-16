<div class="quicklink bg-white p-3 slab-edge position-relative text-center">
  @if ($icon)
  {!! wp_get_attachment_image($icon, 'thumbnail', true, ['class' => 'quicklink__icon']) !!}
  @endif
  <h6 class="quicklink__title mt-3">
  	<a href="{{ $link['url'] }}" class="stretched-link text-dark text-decoration-none" target="{{ $link['target'] ?: '_self' }}">{!! $link['title'] !!}</a>
  </h6>
</div>
