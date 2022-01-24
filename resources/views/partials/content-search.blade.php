<article @php post_class() @endphp>
  <header class="pt-3">
    <h4 class="entry-title h5 mb-1"><a href="{{ 'database' == get_post_type() ? get_field('database_url') : get_permalink() }}" class="text-dark text-decoration-none">{!! get_the_title() !!}</a> <small class="text-capitalize fw-light text-muted small">| {{ get_post_type() }}</small></h4>
    <a href="{{ 'database' == get_post_type() ? get_field('database_url') : get_permalink() }}" class="d-block small text-primary mb-3">{{ 'database' == get_post_type() ? get_field('database_url') : get_permalink() }}</a>
  </header>
  <div class="entry-summary pb-2 text-muted">
    @php the_excerpt() @endphp
  </div>
  <footer class="border-bottom-dashed-1">
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </footer>
</article>
