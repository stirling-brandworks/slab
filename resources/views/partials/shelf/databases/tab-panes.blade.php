<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-browse-alphabetically" role="tabpanel"
       aria-labelledby="nav-browse-alphabetically-tab">

    {{--Browse Alphabetically--}}

    <div class="p3 border my-4">
      @foreach($letters as $letter)
        @if(isset($items_az_transformed[$letter]))
            <a href="{{ '#' . $letter }}" class="text-dark me-2 exists  fw-bold text-decoration-none ">
              {{ $letter }}
            </a>
        @else
          <div class="text-lighter disabled me-2"
               aria-disabled="true">
            {{ $letter }}
          </div>
        @endif
      @endforeach
    </div>

    @foreach ($items_az_transformed as $letter => $databases)
      <h2 class="position-relative"><a id="{{ $letter }}" class="text-green fw-bold text-decoration-none">{{ $letter }}</a></h2>

        @foreach ($databases as $database)
            @include('components.shelf.database-item', $database)
        @endforeach

    @endforeach
  </div>


  {{--Browse By Subject--}}
  <div class="tab-pane fade" id="nav-browse-by-subject" role="tabpanel" aria-labelledby="nav-browse-by-subject-tab">
    <div
      class="navigate-to mb-5 justify-content-sm-center justify-content-lg-start d-flex flex-wrap flex-row w-100 align-items-center">
         <div class="dropdown show navigate-to  bg-dark-white p-2">
            <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
              data-bs-toggle="dropdown"
               data-flip="false"
               aria-haspopup="true" aria-expanded="false">
              Browse Subjects
            </a>

            <div class="dropdown-menu shadow rounded-3 border-0" aria-labelledby="dropdownMenuLink">
              @foreach ($items_by_subject as $subject => $databases)
                <a class="dropdown-item fw-bold" href="{!! "#" . $subject !!}">{!! $subject !!}</a>
              @endforeach
            </div>
        </div>

    </div>
    @foreach ($items_by_subject as $subject => $databases)
      <div class='position-relative'>
        <a id="{!! $subject !!}"><h2 class="fw-bold">{!! $subject !!}</h2></a>
      </div>
      <ul class="list-unstyled card-list  p-0">
        @foreach ($databases as $database)

          <li class="w-100 p-0">
            @include('components.card', $database)
          </li>
        @endforeach
      </ul>
    @endforeach
  </div>
</div>