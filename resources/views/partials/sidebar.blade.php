<div class="sidebar__inner py-2 bg-white border shadow-sm position-relative z-3">
	<h4 class="border-bottom pb-2 px-4">
		<a href="{{ get_permalink($post->post_parent) }}" class="d-inline-block text-dark text-decoration-none">{!! get_the_title($post->post_parent) !!}</a>
	</h4>
	<ul class="sidebar__menu p-0 mx-0 my-3 list-unstyled">
    	{!! $related !!}
  	</ul>
	@php dynamic_sidebar('sidebar-primary') @endphp
</div>
