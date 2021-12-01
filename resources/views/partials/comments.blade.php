@php
if (post_password_required()) {
return;
}
@endphp

<section id="comments" class="comments">
  @if (have_comments())
  <div class="mt-5">
    <hr>
    <h5 class="mb-4">
      {!! sprintf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(),
      'comments title', 'slab'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
    </h5>

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
  </div>
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
  <div class="alert alert-warning">
    {{ __('Comments are closed.', 'slab') }}
  </div>
  @endif

  @php comment_form() @endphp
</section>
