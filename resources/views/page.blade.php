@extends('layouts.default')

@section('content')
    @include('partials.page-header')
    @while (have_posts())
        @php the_post() @endphp
        @include('partials.content-page')
    @endwhile
@endsection
