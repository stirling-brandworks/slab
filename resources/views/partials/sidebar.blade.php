<div class="sidebar__inner py-2 bg-white border shadow-sm position-relative z-3">
    <h4 class="border-bottom px-3 py-2">
        <a href="{{ get_permalink($post->post_parent) }}" class="text-dark text-decoration-none">
            {!! get_the_title($post->post_parent) !!}
        </a>
    </h4>
    <div class="px-3">
        <ul class="sidebar__menu me-3 list-unstyled">
            {!! $related !!}
        </ul>
        @php dynamic_sidebar('sidebar-primary') @endphp
    </div>
</div>
