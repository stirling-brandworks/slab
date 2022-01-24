@include('shelf.partials.branches.map-acf-helper-code')
<div class="map-wrapper map-wrapper--raised position-relative z-2 slab-edge border overflow-hidden mb-5 w-100">
	
    @php
		$args = array('numberposts' => 20, 'post_type' => 'branch');
		$branches = get_posts( $args )
	@endphp

    <div class="acf-map" data-zoom="16">
        @foreach ($branches as $branch)

        	@include('components.shelf.map-marker', [
			    'title' => $branch->post_title,
			    'image' => get_post_thumbnail_id($branch),
			    'address' => get_field('address', $branch),
			    'phone' => get_field('branch_phone_number', $branch),
			])

    	@endforeach
    </div>

</div>