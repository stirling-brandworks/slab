@extends('layouts.full-width')

@section('content')
@include('partials.page-header')
<div class="pt-3">
	<div class="container">
		@if (!have_posts())
		<div class="alert alert-warning">
		  {{ __('Sorry, but the page you were trying to view does not exist.', 'slab') }}
		</div>
		{!! get_search_form(false) !!}
		@endif
	</div>
</div>
@endsection
