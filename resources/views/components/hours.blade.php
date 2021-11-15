@if ( $branch_id = get_field('main_branch_object','option'))
<div id="Live-Hours" class="block-w-icon pt-2 px-2 text-center text-md-start">
    @if ( get_field('disable_live_hours','option') == "false")
    	<div class="d-inline-block d-md-block">{!! get_field('live_hours_override','option') !!}</div>
		@if ( get_field('live_hours_override_url','option'))
	    	<a href="{!! get_field('live_hours_override_url','option')['url'] !!}" class="d-inline-block fst-italic text-muted text-decoration-none">{!! get_field('live_hours_override_url','option')['title'] !!}</a>
	    @endif
	@else
		<div class="d-inline-block d-md-block">{!! libby_todays_hours($branch_id) !!}</div>
    	<div class="d-inline-block d-md-block fw-bold fst-italic">{!! libby_get_open_status($branch_id) !!}</div>
	    @if ( get_field('live_hours_url','option'))
	    	<a href="{!! get_field('live_hours_url','option')['url'] !!}" class="d-inline-block fst-italic text-muted text-decoration-none">{!! get_field('live_hours_url','option')['title'] !!}</a>
	    @endif
	@endif
</div>
@endif
