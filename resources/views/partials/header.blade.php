<header class="header">
  <nav class="secondary-menu__wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 col-lg-3 text-center text-lg-start d-none d-md-block">
          <a class="navbar-brand py-1 d-inline-block mb-3 mb-md-0 mt-md-3 mt-lg-0" href="{{ home_url('/') }}">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="{{ $site_name }} Logo" class="mw-100 h-auto"/>
          </a>
        </div>
        <div class="col-12 col-md-9 col-lg-6 col-xl-5 text-center text-lg-end">
          <div class="secondary-menu__icon-block secondary-menu__icon-block--hours d-md-inline-block text-center text-md-start py-1 pt-md-3 align-middle">
            @include('shelf.components.hours')
          </div>
          <ul class="secondary-menu__list list-unstyled m-0 p-0 d-none d-md-inline-block align-middle">
            @if (has_nav_menu('secondary_navigation'))
              {!! wp_nav_menu($secondary_menu) !!}
            @endif
          </ul>
        </div>
        <div class="col-12 col-lg-3 col-xl-4 text-md-end d-none d-md-block">
          <hr class="d-none d-md-block d-lg-none"/>
          <div class="pt-lg-3 ps-lg-2">
            @include('shelf.components.searchform')
          </div>
        </div>
      </div>
    </div>
  </nav>
  <nav class="main-menu-wrapper border-top bg-white">
    <div class="container">
      {!! wp_nav_menu($primary_menu) !!}
    </div>
  </nav>
</header>