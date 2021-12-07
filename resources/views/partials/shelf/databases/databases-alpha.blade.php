@include('partials.shelf.databases.anchor-alpha-list')

@foreach ($items_az_transformed as $letter => $databases)
  <h2 class="position-relative">
    <a id="{{ $letter }}" class="text-secondary fw-bold text-decoration-none">{{ $letter }}</a>
  </h2>
  <div class="databases-wrapper">
  	@foreach ($databases as $database)
	  @include('components.shelf.database-item', [
		    'image' => get_post_thumbnail_id(),
		    'layout' => 'horizontal',
		], $database)
  	@endforeach
  </div>
@endforeach

