<article @php post_class() @endphp>
  <header class="pt-3">
    @if( 'database' == get_post_type() )
		<h4 class="entry-title m-0 h5"><a href="{{ the_field('database_url') }}" class="text-dark text-decoration-none">{!! get_the_title() !!}</a> <small class="text-capitalize fw-light text-muted small">| {{ get_post_type() }}</small></h4>
		<a href="{{ the_field('database_url') }}" class="small text-primary">{{ the_field('database_url') }}</a>
  	@else
    	<h4 class="entry-title h5"><a href="{{ get_permalink() }}" class="text-dark text-decoration-none">{!! get_the_title() !!}</a> <small class="text-capitalize fw-light text-muted small">| {{ get_post_type() }}</small></h4>
  	@endif
  </header>
  <div class="entry-summary pb-2 text-muted">
    @php the_excerpt() @endphp
  </div>
  <footer class="border-bottom-dashed">
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </footer>
</article>
