<article @php post_class() @endphp>
  <header>
    @if( 'database' == get_post_type() )
		<h2 class="entry-title"><a href="{{ the_field('database_url') }}">{!! get_the_title() !!}</a></h2>
  	@else
    	<h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  	@endif

    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
