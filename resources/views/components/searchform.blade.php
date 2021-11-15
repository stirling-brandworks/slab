@php
$searchType = isset($_GET['search_select']) || is_search() ?
'site' :
'catalog'
@endphp

<form class="searchform" method="POST" action="{{ admin_url('admin-post.php') }}">
  <div class="position-relative">
    <input type="text" class="searchform__search form-control py-1 pe-5" type="text" name="s" id="s" placeholder="Search..."
      value="{!! get_search_query() !!}" />
    <button type="submit" class="searchform__submit bg-transparent border-0 p-0 pe-3" title="Search"><i class="fa fa-search text-muted"></i></button>
  </div>
  <ul class="list-unstyled list-inline mt-1 text-end mb-0">
    <li class="list-inline-item">
      <input class="button_catalog radio radio--styled" type="radio"
        name="search_select" value="catalog" id="button_catalog" checked >
      <label class="pl-2" for="button_catalog">
        Catalog</label>
    </li>
    <li class="list-inline-item ml-4">
      <input class="button_site radio radio--styled" type="radio"
        name="search_select" value="site" id="button_site">
      <label class="pl-2" for="button_site" > Website</label>
    </li>
  </ul>
  <input type="hidden" name="action" value="libby_search" />
</form>