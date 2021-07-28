{{--
  Template Name: Kitchen Sink
--}}

@extends('layouts.default')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')

@include('components.slider', ['slides' => get_field('slides')])
@endwhile
@endsection
