@if ( $branch_id = get_field('main_branch_object','option'))
<div id="Live-Hours">
    @if ( get_field('live_hours_display','option') == "false")
    	<div class="d-inline-block d-md-block">{!! get_field('live_hours_override','option') !!}</div>
		@if ( get_field('live_hours_override_url','option'))
	    	<a href="{!! get_field('live_hours_override_url','option')['url'] !!}" class="d-inline-block fst-italic text-muted text-decoration-none">{!! get_field('live_hours_override_url','option')['title'] !!}</a>
	    @endif
	@else
		<div class="d-inline-block d-md-block fw-bold">{!! libby_todays_hours($branch_id) !!}</div>
    	<div class="d-inline-block d-md-block fw-bold text-primary lh-1 mb-1">{!! libby_get_open_status($branch_id) !!}</div>
	    @if ( get_field('live_hours_url','option'))
	    	<a href="{!! get_field('live_hours_url','option')['url'] !!}" class="d-inline-block fst-italic text-muted">{!! get_field('live_hours_url','option')['title'] !!}</a>
	    @endif
	@endif
</div>
@endif
