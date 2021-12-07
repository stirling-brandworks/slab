@include('partials.shelf.databases.anchor-alpha-list')

@foreach ($items_az_transformed as $letter => $databases)
  <h2 class="position-relative">
    <a id="{{ $letter }}" class="text-secondary fw-bold text-decoration-none">{{ $letter }}</a>
  </h2>
  @foreach ($databases as $database)
      @include('components.shelf.database-item', $database)
  @endforeach
@endforeach