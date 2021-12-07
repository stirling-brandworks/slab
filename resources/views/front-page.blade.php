@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	@if ( get_field('hero')['section_display'])
		@php $hero = get_field('hero_section') @endphp
		@include('partials.hero')
	@endif

	@php $quicklinksSec = get_field('quicklinks_section') @endphp
	@if ( $quicklinksSec['section_display'])
	<section class="pt-2 pb-4 bg-white">
		<div class="container">

			@if ( $quicklinksSec['title'] )
				<div class="title-wrapper text-center @if ( $quicklinksSec['link'] ) w-100 d-md-flex justify-content-md-between align-items-md-center text-md-start @endif">
					<h3>{!! $quicklinksSec['title'] !!}</h3>
					@if ( $quicklinksSec['link'] )
						<a href="{!! $quicklinksSec['link']['url'] !!}" class="slab-link slab-link--arrow">{!! $quicklinksSec['link']['title'] !!}</a>
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
	<section class="pt-3 bg-white bg-w-bottom bg-w-bottom--light">
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

			@php $featuredResources = get_field('resources')['featured_databases'] @endphp
			@if( $featuredResources )
			<div class="mt-4 px-lg-5">
				<div class="swiper-container slab-multi-swiper mx-5 mx-md-0 pe-md-5">
  					<div class="swiper-wrapper mx-md-5">
				    	@foreach ($featuredResources as $featuredResource)
	        			@php
	        				$title = get_the_title( $featuredResource->ID );
	        				$content = get_the_excerpt( $featuredResource->ID );
	        				$link['url'] = get_field( 'database_url', $featuredResource->ID );
	        				$imageId = get_post_thumbnail_id( $featuredResource->ID );
	        				$layout = 'vertical';
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
					@php $featuredPost = get_field('news')['featured_post'] @endphp
					@if( $featuredPost )
					<div class="mt-5">
						@php
							$title = get_the_title( $featuredPost->ID );
							$date = get_the_date( 'M jS, Y', $featuredPost->ID );
		        			$excerpt = get_the_excerpt( $featuredPost->ID );
		        			$content = substr($excerpt, 0, 260);
		        			$link = ['title'=>'Read More', 'url'=> get_post_permalink($featuredPost->ID)];
		        			$image = get_post_thumbnail_id( $featuredPost->ID );
		        			$layout = 'vertical';
		        			$imageSize = 'large';
						@endphp
						@include('components.card')
					@endif
					</div>
				</div>
				<div class="col-md-5">
					@php
						$excludeFeaturedPost = get_field('news')['featured_post']->ID;
						$categoryIds = get_field('news')['news_category'];
						$args = array('numberposts' => 3, 'exclude' => $excludeFeaturedPost, 'category' => $categoryIds);
						$latestPosts = get_posts( $args )
					@endphp

					@if ( $latestPosts )
					<div class="cards-wrapper">
						@foreach ($latestPosts as $latestPost)
							<div class="mt-5">
								@include('components.card', [
								    'title' => $latestPost->post_title,
								    'date' => null,
								    'content' => null,
								    'link' => ['title'=>'Read More', 'url'=> get_post_permalink($latestPost) ],
								    'image' => get_post_thumbnail_id($latestPost),
								    'layout' => 'horizontal',
								    'imageSize' => 'square-thumbnail',
								])
							</div>
						@endforeach
					</div>
					@endif

					@if ( $news['link'] )
					<div class="ps-md-3 mt-1">
						<a href="{!! $news['link']['url'] !!}" class="btn btn-primary d-block">{!! $news['link']['title'] !!}</a>
					</div>
					@endif
				</div>
			</div>
		</div>
	</section>
	@endif

	@include('partials.content-page')
@endwhile
@endsection
