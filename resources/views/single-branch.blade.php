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
			Events
		</div>
	</div>
</div>

@endwhile
@endsection
