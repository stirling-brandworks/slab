<div class="page-header bg-primary py-3 overflow-hidden @if(get_post_thumbnail_id()) page-header--w-img @endif">
	<div class="container">
  		<h1 class="page-header__title @if(App\display_sidebar()) page-header__title--w-sidebar @endif text-white mt-5 mb-0 position-relative z-2">{!! App::title() !!}</h1>
  	</div>
  	@if(get_post_thumbnail_id())
        {!! wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ["class" => "page-header__img"]) !!}
    @endif
</div>