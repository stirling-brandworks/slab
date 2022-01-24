<div class="quicklink bg-white p-3 position-relative text-center h-100 transition-all ease-ease duration-1 border border-color-primary-hover">
  @if ($icon)
  {!! wp_get_attachment_image($icon, 'thumbnail', true, ['class' => 'quicklink__icon']) !!}
  @endif
  <h6 class="quicklink__title mt-3">
  	<a href="{{ $link['url'] }}" class="stretched-link text-dark text-decoration-none" target="{{ $link['target'] ?: '_self' }}">{!! $link['title'] !!}</a>
  </h6>
</div>
