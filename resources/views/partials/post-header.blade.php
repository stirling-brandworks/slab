<div class="post-header position-relative pt-3">
	<div class="container">
      <div class="row">
        <div class="col-12 col-md-9 offset-md-1">
			<div class="post-header__main position-relative z-2 mt-5 border shadow-sm bg-white slab-edge p-4 mb-3">
				@php $category = get_the_category() @endphp
				<h6 class="post-header__subtitle text-uppercase text-green-dark mb-2 small">{{ $category[0]->cat_name }}</h6>
	  			<h1 class="post-header__title mb-3">{!! App::title() !!}</h1>
	  		</div>
	  	</div>
	  </div>
  	</div>
  	<div class="post-header__meta bg-white position-relative z-2">
  		<div class="container">
  			<div class="row">
        		<div class="col-12 col-md-9 offset-md-1">
			  		<div class="mx-4">
			  			@include('partials/entry-meta')
			  		</div>
			  	</div>
			</div>
  		</div>
  	</div>
</div>