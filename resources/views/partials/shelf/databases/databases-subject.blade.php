@include('partials.shelf.databases.subject-dropdown')

@foreach ($items_by_subject as $subject => $databases)
  <h2 class="fw-bold" id="{!! $subject !!}">{!! $subject !!}</h2>

  <div class="databases-wrapper">
    @foreach ($databases as $database)
	  @include('components.shelf.database-item', [
		    'image' => get_post_thumbnail_id(),
		    'layout' => 'horizontal',
		], $database)
  	@endforeach
  </div>
@endforeach