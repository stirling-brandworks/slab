<article @php post_class() @endphp>
  @include('partials.page-header')
  <div class="pt-3">
    <div class="container">
      @php the_content() @endphp
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
          <p>' . __('Pages:', 'slab'), 'after' => '</p>
        </nav>']) !!}
      </footer>
      @php comments_template('/partials/comments.blade.php') @endphp
    </div>
  </div>
</article>
