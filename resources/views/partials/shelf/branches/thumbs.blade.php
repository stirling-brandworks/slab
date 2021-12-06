@php
	$args = array('post_type' => 'branch', 'numberposts' => 20);
	$branches = get_posts( $args )
@endphp

@if ( $branches )
<div class="cards-wrapper row mt-5">
	@foreach ($branches as $branch)
		<div class="col-12 col-md-6">
			@include('components.card', [
				'branch' => 'true',
				'layout' => 'vertical',
			    'imageSize' => 'large',
			    'title' => $branch->post_title,
			    'link' => ['title'=>'Branch Details', 'url'=> get_post_permalink($branch) ],
			    'image' => get_post_thumbnail_id($branch),
			    'address' => get_field('address', $branch),
			    'phone' => get_field('branch_phone_number', $branch),
			    'email' => get_field('branch_email', $branch),
			    'todayhours' => libby_todays_hours($branch, ''),
			    'status' => libby_get_open_status($branch),
			])
		</div>
	@endforeach
</div>
@endif
