@extends('layouts.full-width')

@section('content')
@while(have_posts()) @php the_post() @endphp
	
	<section class="bg-secondary pt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					Slider
					<!--Choice of static or posts-->
				</div>
				<div class="col-md-4">
					<div class="bg-white rounded border p-3">
						Sidebar
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
