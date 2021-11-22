@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	@if ( get_field('hero')['section_display'])
		@php $hero = get_field('hero_section') @endphp
		@include('partials.hero')
	@endif

	@php $quicklinks_sec = get_field('quicklinks_section') @endphp
	@if ( $quicklinks_sec['section_display'])
	<section class="pt-2 pb-4 bg-white">
		<div class="container">

			@if ( $quicklinks_sec['title'] )
				<div class="title-wrapper text-center @if ( $quicklinks_sec['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
					<h3>{!! $quicklinks_sec['title'] !!}</h3>
					@if ( $quicklinks_sec['link'] )
						<a href="{!! $quicklinks_sec['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $quicklinks_sec['link']['title'] !!}</a>
					@endif
				</div>
			@endif

			@php $quicklinks = get_field('quicklinks')['quicklinks'] @endphp
			<div class="row my-3 row-cols-1 row-cols-sm-3 row-cols-lg-5">
		       @foreach ($quicklinks as $quicklink)
		            <div class="col mb-2">
		              @include('components.quicklink', $quicklink)
		            </div>
	            @endforeach
			</div>
		</div>
	</section>
	@endif

	@php $books = get_field('books') @endphp
	@if ( $books['section_display'])
	<section class="pt-3 pb-5 bg-white bg-w-bottom bg-w-bottom--light">
		<div class="container position-relative z-1">
			@if ( $books['title'] )
				<div class="title-wrapper text-center @if ( $books['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
					<h3 class="text-center">{!! $books['title'] !!}</h3>
					@if ( $books['link'] )
						<a href="{!! $books['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $books['link']['title'] !!}</a>
					@endif
				</div>
			@endif

			@php $tabs = get_field('books')['tabs'] @endphp
			@if ($tabs)
			<div class="pb-5">
        		@include('components.tabs', $tabs)
        	</div>
          	@endif
		</div>
	</section>
	@endif

	@php $resources = get_field('resources') @endphp
	@if ( $resources['section_display'])
	<section class="pt-3 bg-light">
		<div class="container">
			@if ( $resources['title'] )
			<div class="title-wrapper text-center @if ( $resources['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
				<h3 class="text-center">{!! $resources['title'] !!}</h3>
				@if ( $resources['link'] )
					<a href="{!! $resources['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $resources['link']['title'] !!}</a>
				@endif
			</div>
			@endif

			@php $featured_resources = get_field('resources')['featured_databases'] @endphp
			@if( $featured_resources )
			<div class="mt-4 px-lg-5">
				<div class="swiper-container slab-multi-swiper mx-5 mx-md-0 pe-md-5">
  					<div class="swiper-wrapper mx-md-5">
				    	@foreach ($featured_resources as $featured_resource)
	        			@php
	        				$title = get_the_title( $featured_resource->ID );
	        				$excerpt = get_the_excerpt( $featured_resource->ID );
	        				$url = get_field( 'database_url', $featured_resource->ID );
	        				$image = get_post_thumbnail_id( $featured_resource->ID );
	        			@endphp
				    		<div class="swiper-slide slab-slide">
				    			@include('components.shelf.database-item')
				    		</div>
				    	@endforeach
			    	</div>
			    	<div class="swiper-button-prev slab-swiper__button-prev slab-swiper__button-prev--dark"></div>
  					<div class="swiper-button-next slab-swiper__button-next slab-swiper__button-next--dark"></div>
			    </div>
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
				<h3 class="text-center mb-5">{!! $news['title'] !!}</h3>
			@endif
			<div class="row">
				<div class="col-md-7">
					
					
					@php $featured_post = get_field('news')['featured_post'] @endphp
					@if( $featured_post )
						card
					@endif

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
