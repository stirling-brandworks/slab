<section id="hero" class="hero bg-secondary bg-w-bottom bg-w-bottom--white pt-4">
  <div class="container">
    <div class="row">
      @php $slider = get_field('slider') @endphp
      @if ($slider['slides'])
      <div class="col-md-7 col-lg-8">
        @include('components.slider', $slider)
      </div>
      @endif
      @if ( $hero['title'] || $hero['link'] || $hero['hero_sidebar_content'])
      <div class="col-md-5 col-lg-4">
        <div class="slab-sidebar bg-white slab-edge border p-3">
          @if ( $hero['title'])
          <h3>{!! $hero['title'] !!}</h3>
          @endif

          @if ( $hero['hero_sidebar_content'])
          <div class="slab-sidebar__content">{!! $hero['hero_sidebar_content'] !!}</div>
          @endif

          @if ($hero['link'])
          <div class="pt-2">
            <a href="{!! $hero['link']['url'] !!}" class="btn btn-primary d-block">{!! $hero['link']['title'] !!}</a>
          </div>
          @endif
        </div>
      </div>
      @endif
    </div>
  </div>
</section>