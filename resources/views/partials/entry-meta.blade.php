<div class="meta row mb-4">
	<div class="col-6 col-lg-3">
		@include('partials.meta.date')
	</div>
	<div class="col-6 col-lg-3">
		@include('partials.meta.author')
	</div>
	@if(get_the_tags())	
	<div class="col-12 col-lg-6 mt-3 mt-lg-0">
		@include('partials.meta.tags')
	</div>
	@endif
</div>