@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	@php $hero = get_field('hero_section') @endphp
	@if ( get_field('hero')['section_display'] == "true")
	<section class="bg-secondary bg-w-white-bottom pt-4">
		<div class="container">
			<div class="row">
				@php $slider = get_field('slider') @endphp
				@if ($slider['slides'])
				<div class="col-md-7 col-lg-8">
					@include('components.slider', $slider)
				</div>
				@endif
				@if ( $hero['title'] || $hero['link'] || $hero['hero_sidebar_content'])
				<div class="col-md-5 col-lg-4">
					<div class="bg-white slab-edge border p-3">
						@if ( $hero['title'])
						<h3>{!! $hero['title'] !!}</h3>
						@endif

						@if ( $hero['hero_sidebar_content'])
						<div class="text-muted">{!! $hero['hero_sidebar_content'] !!}</div>
						@endif

						@if ($hero['link'])
						<div class="pt-2">
							<a href="{!! $hero['link']['url'] !!}" class="btn btn-primary d-block">{!! $hero['link']['title'] !!}</a>
						</div>
						@endif
					</div>
				</div>
				@endif
			</div>
		</div>
	</section>
	@endif

	@php $quicklinks_sec = get_field('quicklinks_section') @endphp
	@if ( $quicklinks_sec['section_display'] == "true")
	<section class="pt-2 pb-5 bg-white">
		<div class="container">
			@if ( $quicklinks_sec['title'] )
				<h3 class="text-center text-md-start">{!! $quicklinks_sec['title'] !!}</h3>
			@endif
			@if ( $quicklinks_sec['link'] )
				<a href="{!! $quicklinks_sec['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $quicklinks_sec['link']['title'] !!}</a>
			@endif
			@php $quicklinks = get_field('quicklinks_section')['quicklinks'] @endphp
			<div class="row">
				Quicklinks here
			</div>
		</div>
	</section>
	@endif

	@php $books = get_field('books') @endphp
	@if ( $books['section_display'] == "true")
	<section class="pt-3 pb-5 bg-white bg-w-gray-bottom">
		<div class="container">
			@if ( $books['title'] )
				<h3 class="text-center">{!! $books['title'] !!}</h3>
			@endif
			@if ( $books['link'] )
				<a href="{!! $books['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $books['link']['title'] !!}</a>
			@endif
		</div>
	</section>
	@endif

	@php $resources = get_field('resources') @endphp
	@if ( $resources['section_display'] == "true")
	<section class="pt-3 pb-5 bg-light">
		<div class="container">
			@if ( $resources['title'] )
				<h3 class="text-center">{!! $resources['title'] !!}</h3>
			@endif
			@if ( $resources['link'] )
				<a href="{!! $resources['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $resources['link']['title'] !!}</a>
			@endif
		</div>
	</section>
	@endif

	@php $news = get_field('news') @endphp
	@if ( $news['section_display'] == "true")
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
