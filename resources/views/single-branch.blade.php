@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.post-header')

@include('partials.shelf.branches.meta.hours')
<div class="container">
	<div class="row my-5">
		<div class="col-12 col-md-7">
		@include('partials.shelf.branches.meta.holidays')
		</div>

	    <div class="col-12 col-md-5">
	        <div class="slab-sidebar bg-white slab-edge border p-3">
	          <h3>Events</h3>
	          <div class="slab-sidebar__content">Content for this widget or events</div>
	          <div class="pt-2">
	            <a href="#URL" class="btn btn-primary d-block">View Calendar</a>
	          </div>
	        </div>
	    </div>
	   
	</div>
</div>

@endwhile
@endsection
