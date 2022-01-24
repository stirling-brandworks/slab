<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" 
    id="browse-alphabetically"
    role="tabpanel" 
    aria-labelledby="browse-alphabetically-tab">
        @include('shelf.partials.databases.databases-alpha')
  </div>
  <div class="tab-pane fade" 
  id="browse-by-subject" 
  role="tabpanel" 
  aria-labelledby="browse-by-subject-tab">
    @include('shelf.partials.databases.databases-subject')
  </div>
</div>