{{--
  Template Name: Branches / Locations
--}}

@extends('layouts.full-width')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="container">
    	<div class="row mb-5">
			  <div class="col-12 col-lg-9 offset-lg-1">
    			@include('shelf.partials.branches.map')
    			@include('partials.content-page')
      		@include('shelf.partials.branches.thumbs')
      	</div>
		  </div>
    </div>
  @endwhile
@endsection
