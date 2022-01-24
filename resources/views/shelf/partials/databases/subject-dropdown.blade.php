<div class="d-md-flex my-4">
  <span class="h5 fw-light align-self-center me-3 d-block d-md-flex text-center text-md-start">Jump To:</span>
  <div class="dropdown show">
    <a class="btn dropdown-toggle bg-gray border px-5 d-block d-md-inline-block" 
      href="#" role="button" 
      id="dropdownMenuLink"
      data-bs-toggle="dropdown" 
      data-flip="false" 
      aria-haspopup="true" 
      aria-expanded="false">
      Browse Subjects
    </a>
    <div class="dropdown-menu shadow-sm rounded-3 border-0 w-100" aria-labelledby="dropdownMenuLink">
      @foreach ($items_by_subject as $subject => $databases)
        <a class="dropdown-item fw-bold" href="{!! '#' . $subject !!}">{!! $subject !!}</a>
      @endforeach
    </div>
  </div>
</div>