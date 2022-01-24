<div class="post-header position-relative pt-4 mb-4">
	<div class="container">
    	<div class="row">
      	@if(get_post_thumbnail_id())
      		<div class="col-12 col-md-5">
      	@else
      		<div class="col-12 col-md-9 offset-md-1">
      		@endif
				<div class="post-header__main position-relative z-2 mt-5 border shadow-sm bg-white p-4 mb-3">
					@if(get_post_type() === 'post')
						@include('partials.meta.category')
					@endif
		  			<h1 class="post-header__title mb-3">{!! App::title() !!}</h1>
		  			@if(get_post_type() === 'branch')
		  				@php 
			  				$address  = get_field('address', $branch); 
			  				$phone  = get_field('branch_phone_number', $branch); 
			  				$email  = get_field('branch_email', $branch);
		  				@endphp
		  				<div class="my-4">
		  					@include('partials.shelf.branches.meta.address')
		  				</div>
		  				<div class="mb-3">
		  					@include('partials.shelf.branches.meta.phone')
		  					<span class="ms-2 ms-lg-3">
		  						@include('partials.shelf.branches.meta.email')
		  					</span>
		  				</div>
		  			@endif
		  		</div>
		  		@if(get_post_thumbnail_id() && get_post_type() === 'post')
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
        		{!! wp_get_attachment_image(get_post_thumbnail_id(), 'post_hero_img', false, ["class" => "post-header__img h-auto position-relative z-1"]) !!}
	  		</div>
	  	@endif
	  </div>
  		@if(!get_post_thumbnail_id() && get_post_type() === 'post')
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