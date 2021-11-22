@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	
	@if ( get_field('hero')['section_display'])
		@php $hero = get_field('hero_section') @endphp
		@include('partials.hero')
	@endif

	@php $quicklinks_sec = get_field('quicklinks_section') @endphp
	@if ( $quicklinks_sec['section_display'])
	<section class="pt-2 pb-5 bg-white">
		<div class="container">
			
			@if ( $quicklinks_sec['title'] )
				<div class="title-wrapper text-center @if ( $quicklinks_sec['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
					<h3>{!! $quicklinks_sec['title'] !!}</h3>
					@if ( $quicklinks_sec['link'] )
						<a href="{!! $quicklinks_sec['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $quicklinks_sec['link']['title'] !!}</a>
					@endif
				</div>
			@endif

			@php $quicklinks = get_field('quicklinks_section')['quicklinks'] @endphp
			<div class="row my-3">
				<div class="col">
					Quicklinks here
				</div>
			</div>
		</div>
	</section>
	@endif

	@php $books = get_field('books') @endphp
	@if ( $books['section_display'])
	<section class="pt-3 pb-5 bg-white bg-w-gray-bottom">
		<div class="container">
			@if ( $books['title'] )
				<div class="title-wrapper text-center @if ( $books['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
					<h3 class="text-center">{!! $books['title'] !!}</h3>
					@if ( $books['link'] )
						<a href="{!! $books['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $books['link']['title'] !!}</a>
					@endif
				</div>
			@endif
		</div>
	</section>
	@endif

	@php $resources = get_field('resources') @endphp
	@if ( $resources['section_display'])
	<section class="pt-3 pb-5 bg-light">
		<div class="container">
			@if ( $resources['title'] )
			<div class="title-wrapper text-center @if ( $resources['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
				<h3 class="text-center">{!! $resources['title'] !!}</h3>
				@if ( $resources['link'] )
					<a href="{!! $resources['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $resources['link']['title'] !!}</a>
				@endif
			</div>
			@endif
		</div>
	</section>
	@endif

	@php $news = get_field('news') @endphp
	@if ( $news['section_display'])
	<section class="py-5 bg-white">
		<div class="container">
			@if ( $news['title'] )
				<h3 class="text-center">{!! $news['title'] !!}</h3>
			@endif
			<div class="row">
				<div class="col-md-7">
					Recent Post
				</div>
				<div class="col-md-5">
					News Thumbs

					@if ( $news['link'] )
						<a href="{!! $news['link']['url'] !!}" class="btn btn-primary d-block">{!! $news['link']['title'] !!}</a>
					@endif
				</div>
			</div>
		</div>
	</section>
	@endif

	@include('partials.content-page')
@endwhile
@endsection
