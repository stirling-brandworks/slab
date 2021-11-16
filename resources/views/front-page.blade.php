@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	<section class="bg-secondary bg-w-white-bottom pt-4">
		<div class="container">
			<div class="row">
				@php $slider = get_field('slider') @endphp
				@if ($slider['slides'])
				<div class="col-md-7 col-lg-8">
					@include('components.slider', $slider)
				</div>
				@endif
				<div class="col-md-5 col-lg-4">
					<div class="bg-white slab-edge border p-3">
						<h3>Title</h3>
						<div class=""></div>
						<div class="pt-2">
							<a href="#" class="btn btn-primary d-block">Text</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if ($quicklinks)
	<section class="pt-2 pb-5 bg-white">
		<div class="container">
			<div class="row">
				@foreach ($quicklinks as $quicklink)
	            <div class="col">
	              @include('components.quicklink', $quicklink)
	            </div>
	            @endforeach
			</div>
		</div>
	</section>
	@endif

	<section class="pt-3 pb-5 bg-white bg-w-gray-bottom">
		<div class="container">
			<h2 class="text-center">Books</h2>
		</div>
	</section>

	<section class="pt-3 pb-5 bg-light">
		<div class="container">
			<h2 class="text-center">Resources</h2>
		</div>
	</section>

	<section class="py-5 bg-white">
		<div class="container">
			<h2 class="text-center">News</h2>

			<div class="row">
				<div class="col-md-7">
					Recent Post
				</div>
				<div class="col-md-5">
					News Thumbs
				</div>
			</div>
		</div>
	</section>

	@include('partials.content-page')
@endwhile
@endsection
