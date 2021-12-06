@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-single-'.get_post_type())

@include('partials.shelf.branches.meta.disclaimer')


@endwhile
@endsection
