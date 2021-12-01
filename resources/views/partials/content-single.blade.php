<article @php post_class() @endphp>

  @if (get_post_type() === 'post')
    @include('partials.post-header')
  @else
    @include('partials.page-header')
  @endif

  <div class="pt-3">
    <div class="container">
      @if (get_post_type() === 'post')
      <div class="row">
        <div class="col-12 col-md-9 offset-md-1">
      @endif

          @php the_content() @endphp
          <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
              <p>' . __('Pages:', 'slab'), 'after' => '</p>
            </nav>']) !!}
          </footer>
          @php comments_template('/partials/comments.blade.php') @endphp

      @if (get_post_type() === 'post')
        </div>
      </div>
      @endif

    </div>
  </div>
</article>
