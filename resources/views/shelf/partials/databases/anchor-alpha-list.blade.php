<div class="d-md-flex justify-content-md-between my-4">
  <span class="h5 fw-light align-self-center me-3 d-block d-md-flex text-center text-md-start">Jump To:</span>
  @foreach($letters as $letter)
    @if(isset($items_az_transformed[$letter]))
        <a href="{{ '#' . $letter }}" class="text-secondary fw-bold d-inline-block h4 mx-2 mx-md-0">
          {{ $letter }}
        </a>
    @else
      <span class="text-muted d-inline-block h4 fw-light mx-2 mx-md-0"
           aria-disabled="true">
        {{ $letter }}
      </span>
    @endif
  @endforeach
</div>