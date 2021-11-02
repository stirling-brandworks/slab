<header>
  <nav class="secondary-menu__wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-3 text-center text-lg-start d-none d-md-block">
          <a class="navbar-brand py-1 d-inline-block mb-3 mb-md-0" href="{{ home_url('/') }}">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="{{ $site_name }} Logo" />
          </a>
          <hr class="d-none d-md-block d-lg-none"/>
        </div>
        <div class="col-12 col-md-6 col-lg-3 offset-lg-1">
          @include('components.hours')
        </div>
        <div class="col-12 col-md-6 col-lg-4 offset-lg-1 text-md-end d-none d-md-block">
          <ul class="secondary-menu__list list-unstyled mx-0 mb-1 pt-1 px-0">
            @if (has_nav_menu('secondary_navigation'))
              {!! wp_nav_menu($secondary_menu) !!}
            @endif
          </ul>
          @include('components.searchform')
        </div>
      </div>
    </div>
  </nav>
  <nav class="main-menu-wrapper border-top bg-dark">
    <div class="container">
      {!! wp_nav_menu($primary_menu) !!}
    </div>
  </nav>
</header>