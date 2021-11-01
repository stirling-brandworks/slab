<article class="card p-3 mb-4 position-relative" @php post_class() @endphp>
  <header>
    <h2 class="card-title"><a href="{{ get_permalink() }}" class="text-dark text-decoration-none stretched-link">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="card-body px-0">
    @php the_excerpt() @endphp
  </div>
</article>
