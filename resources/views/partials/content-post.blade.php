<article @php post_class('card mb-3') @endphp>
    <div class="row g-0">
        @if (has_post_thumbnail())
            <div class="col-md-3">
                {!! the_post_thumbnail('medium', ['class' => 'img-fluid rounded-start']) !!}
            </div>
        @endif
        <div class="col">
            <div class="card-body">
                <h5 class="card-title">@php the_title() @endphp</h5>
                <p class="card-text">@php the_excerpt() @endphp</p>
                <div class="card-text d-flex align-items-center">
                    <div class="text-muted me-2">@include('partials.meta.date')</div>
                    @if (get_the_author())
                        <div class="text-muted">@include('partials.meta.author')</div>
                    @endif
                    <a href="{{ get_the_permalink() }}" class="card-link stretched-link ms-auto">Read More</a>
                </div>
            </div>
        </div>
    </div>
</article>
