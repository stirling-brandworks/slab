<article @php post_class('card mb-3') @endphp>
    <div class="card-body">
        <h5 class="card-title">@php the_title() @endphp</h5>
        <p class="card-text">@php the_excerpt() @endphp</p>
        <a href="{{ get_the_permalink() }}" class="card-link stretched-link">Read More</a>
    </div>
</article>
