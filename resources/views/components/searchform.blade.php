@php
$searchType = isset($_GET['search_select']) || is_search() ?
'site' :
'catalog'
@endphp

<form class="searchform" method="POST" action="{{ admin_url('admin-post.php') }}">
  <div class="input-group">
    <input type="text" class="form-control" type="text" name="s" id="s" placeholder="Search..."
      value="{!! get_search_query() !!}" />
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div>
  <ul class="list-unstyled list-inline mt-1 text-start">
    <li class="list-inline-item">
      <input class="button_catalog" type="radio"
        name="search_select" value="catalog" id="button_catalog" checked>
      <label class="pl-2" for="button_catalog">
        Catalog</label>
    </li>
    <li class="list-inline-item ml-4">
      <input class="button_site" type="radio"
        name="search_select" value="site" id="button_site">
      <label class="pl-2" for="button_site"> Website</label>
    </li>
  </ul>
  <input type="hidden" name="action" value="libby_search" />
</form>