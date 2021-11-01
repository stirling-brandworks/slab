@extends('layouts.full-width')

@section('content')
@include('partials.page-header')
<div class="pt-3">
	<div class="container">
		@if (!have_posts())
		<div class="alert alert-warning">
		  {{ __('Sorry, no results were found.', 'slab') }}
		</div>
		{!! get_search_form(false) !!}
		@endif

		@while(have_posts()) @php the_post() @endphp
		@include('partials.content-search')
		@endwhile

		{!! get_the_posts_navigation() !!}
	</div>
</div>
@endsection
