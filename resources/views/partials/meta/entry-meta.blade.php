<div class="flex align-items-center">
    @include('partials.meta.date')

    @if (get_the_author())
        @include('partials.meta.author')
    @endif

    @include('partials.meta.tags')
</div>
