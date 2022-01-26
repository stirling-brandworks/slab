<article @php post_class() @endphp>
    <header class="pt-3">
        <h4 class="entry-title h5 mb-1">
            <a href="{{ get_field('database_url') }}" class="text-dark text-decoration-none">
                {!! get_the_title() !!}
            </a>
        </h4>
        <a href="{{ get_field('database_url') }}" class="d-block small text-primary mb-3">
            {{ get_field('database_url') }}
        </a>
    </header>
    <div class="entry-summary pb-2 text-muted">
        @php the_excerpt() @endphp
    </div>
</article>
