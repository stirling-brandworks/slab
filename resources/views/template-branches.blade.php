{{--
  Template Name: Branches / Locations
--}}

@extends('layouts.full-width')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="container">
      @include('partials.shelf.branches.map')
      @include('partials.content-page')
      @include('partials.shelf.branches.thumbs')
    </div>
  @endwhile
@endsection
