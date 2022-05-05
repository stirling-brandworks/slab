<h4 class="m-0">
	<a href="{{ $link['url'] }}" class="stretched-link text-decoration-none text-dark">{!! $title !!}</a> 
	@if($cardRequired) <img src="@asset('images/icons/library-card.svg')" alt="Library Card Icon" height="20" class="ms-2 position-relative z-2"  title="Library Card Required"/> @endif 
	@if($inLibraryOnly) <img src="@asset('images/icons/library-building.svg')" alt="Library Building Icon" height="22" class="ms-2 position-relative z-2" title="In-Library Use Only"/> @endif
</h4>