<article @php post_class() @endphp>
    @include('partials.post-header')

    <div class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    @php the_content() @endphp
                    <footer>
                        {!! wp_link_pages([
                            'echo' => 0,
                            'before' => '<nav class="page-nav"><p>' . __('Pages:', 'slab'),
                            'after' => '</p></nav>',
                        ]) !!}
                    </footer>
                </div>
            </div>
        </div>
        @php comments_template('/partials/comments.blade.php') @endphp
    </div>
</article>
