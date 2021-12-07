@include('partials.shelf.databases.subject-dropdown')

@foreach ($items_by_subject as $subject => $databases)
  <h2 class="fw-bold" id="{!! $subject !!}">{!! $subject !!}</h2>

  <ul class="list-unstyled card-list  p-0">
    @foreach ($databases as $database)
      <li class="w-100 p-0">
        @include('components.card', $database)
      </li>
    @endforeach
  </ul>
@endforeach