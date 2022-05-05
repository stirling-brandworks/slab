<div class="database-item database-item--{!! $layout !!} bg-white transition position-relative transition-all ease-ease duration-1 border border-color-primary-hover">
  @if ($imageId)
    <div class="database-item__img-wrap py-2 px-3">
      <a href="{{ $link['url']  }}" class="stretched-link text-decoration-none text-dark">
        {!! wp_get_attachment_image($imageId, 'medium', false, ['class' => 'database-item__img mw-100 h-auto']) !!}
      </a>
    </div>
  @elseif ($layout == 'vertical')
    <div class="database-item__img-wrap py-2 px-3">
      @include('shelf.partials.databases.database-meta')
    </div>
  @endif
  <div class="database-item__content @if ($imageId) database-item__content--w-img @endif">
    @if($layout == 'horizontal')
      @include('shelf.partials.databases.database-meta')
    @endif
    @if ($content)
      <p class="database-item__text text-muted mt-3 mb-5">{!! $content !!}</p>
    @endif
    <div class="text-end">
      <div class="slab-link slab-link--arrow">Explore</div>
    </div>
  </div>
</div>