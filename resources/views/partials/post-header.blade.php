<div class="post-header position-relative pt-3 mb-4">
	<div class="container">
    	<div class="row">
      	@if(get_post_thumbnail_id())
      		<div class="col-12 col-md-5">
      	@else
      		<div class="col-12 col-md-9 offset-md-1">
      	@endif
			<div class="post-header__main position-relative z-2 mt-5 border shadow-sm bg-white slab-edge p-4 mb-3">
				@php $category = get_the_category() @endphp
				<h6 class="post-header__subtitle text-uppercase text-green-dark mb-2 small">{{ $category[0]->cat_name }}</h6>
	  			<h1 class="post-header__title mb-3">{!! App::title() !!}</h1>
	  		</div>
	  		@if(get_post_thumbnail_id())
		  		<div class="mx-4">
		  			<div class="row mb-3">
		  				<div class="col-12 col-md-6">@include('partials/meta/date')</div>
		  				<div class="col-12 col-md-6">@include('partials/meta/author')</div>
		  			</div>
		  			@include('partials/meta/tags')
		  		</div>
	  		@endif
	  	</div>
	  	@if(get_post_thumbnail_id())
	  		<div class="col-12 col-md-7">
        		{!! wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ["class" => "post-header__img h-auto slab-edge position-relative z-1"]) !!}
	  		</div>
	  	@endif
	  </div>
  		@if(!get_post_thumbnail_id())
  		<div class="row">
	  		<div class="col-12 col-md-9 offset-md-1">
		  		<div class="post-header__meta bg-white position-relative z-2">
			  		<div class="mx-4">
			  			@include('partials/entry-meta')
			  		</div>
		  		</div>
		  	</div>
		</div>
  		@endif
  	</div>
</div>