@extends('layouts.full-width')

@section('content')
@include('partials.page-header')
<div class="border-bottom bg-light pt-3 pb-2">
	<div class="container">
		{!! get_search_form(false) !!}
	</div>
</div>
<div class="pt-1 pb-4">
	<div class="container">
		@if (!have_posts())
		<div class="alert alert-warning">
		  {{ __('Sorry, no results were found based on your search terms.', 'slab') }}
		</div>
		@endif

		@while(have_posts()) @php the_post() @endphp
			@include('partials.content-search')
		@endwhile

		{!! get_the_posts_navigation() !!}
	</div>
</div>
@endsection
