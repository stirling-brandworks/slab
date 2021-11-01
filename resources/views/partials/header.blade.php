<header>
  <nav class="secondary-menu__wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3 text-center text-md-start">
          <a class="navbar-brand py-1 d-inline-block mb-3 mb-lg-0" href="{{ home_url('/') }}">{{ $site_name }}</a>
        </div>
        <div class="col-12 col-md-3 offset-lg-1">
          @include('components.hours')
        </div>
        <div class="col-12 col-md-5 col-lg-4 offset-lg-1 text-md-end">
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