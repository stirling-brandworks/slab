<article class="card card--lg card--horizontal flex-row position-relative transition" @php post_class() @endphp>
  @if (has_post_thumbnail())
    {!! the_post_thumbnail('large', array( 'class' => 'card__img slab-edge' )) !!}
  @endif
  <div class="card__body py-3 px-3 @if (has_post_thumbnail()) card__body--w-lg-img @endif">
    <header>
      <div class="mb-3">
        @include('partials.meta.date') 
        <span class="text-muted mx-2 @if (has_post_thumbnail()) d-none d-sm-inline-block @endif">|</span> 
        <span @if (has_post_thumbnail())class="d-block d-sm-inline-block" @endif>@include('partials.meta.author')</span>
      </div>
      <h4 class="card__title mt-1">
        <a href="{{ get_permalink() }}" class="stretched-link text-decoration-none text-dark">
          {!! get_the_title() !!}
        </a>
      </h4>
    </header>
    <div class="card__text text-muted d-none d-sm-block">
      @php the_excerpt() @endphp
    </div>
    <div class="text-end mt-2 @if (!has_post_thumbnail()) me-4 @endif">
      <span class="slab-link slab-link--arrow">Read More</span>
    </div>
  </div>
</article>