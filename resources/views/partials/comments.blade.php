@php
if (post_password_required()) {
return;
}
@endphp

<section id="comments" class="comments bg-gray py-4 mt-5 border-top">
  <div class="container">
    @if (have_comments())
      <h4 class="mb-5">
        Comments {!! sprintf('<span class="text-muted fw-light">(' . number_format_i18n(get_comments_number()) . ')</span>') !!}
      </h4>

      <ol class="comment-list">
        {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
      </ol>

      @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav>
        <ul class="pager">
          @if (get_previous_comments_link())
          <li class="previous">@php previous_comments_link(__('&larr; Older comments', 'slab')) @endphp</li>
          @endif
          @if (get_next_comments_link())
          <li class="next">@php next_comments_link(__('Newer comments &rarr;', 'slab')) @endphp</li>
          @endif
        </ul>
      </nav>
      @endif
    @endif

    @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="alert alert-warning">
      {{ __('Comments are closed.', 'slab') }}
    </div>
    @endif

    @php comment_form() @endphp
  </div>
</section>
