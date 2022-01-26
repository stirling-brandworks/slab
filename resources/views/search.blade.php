@extends('layouts.default')

@section('content')
    <div class="border-bottom bg-light pt-3 pb-2">
        {!! get_search_form(false) !!}
    </div>
    <div class="pt-1 pb-4">
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found based on your search terms.', 'slab') }}
            </div>
        @endif

        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-search-' . get_post_type())
        @endwhile

        {!! get_the_posts_navigation() !!}
    </div>
@endsection
