<div>
	@php
		$args = array('post_type' => 'branch', 'numberposts' => 20);
		$branches = get_posts( $args )
	@endphp

	@if ( $branches )
	<div class="cards-wrapper">
		@foreach ($branches as $branch)
			<div class="mt-5">
				@include('components.card', [
				    'title' => $branch->post_title,
				    'date' => null,
				    'content' => null,
				    'link' => ['title'=>'Branch Details', 'url'=> get_post_permalink($branch) ],
				    'image' => get_post_thumbnail_id($branch),
				    'layout' => 'vertical',
				    'imageSize' => 'large',
				])
			</div>
		@endforeach
	</div>
	@endif
</div>