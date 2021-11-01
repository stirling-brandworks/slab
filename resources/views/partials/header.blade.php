<header class="banner">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <a class="navbar-brand" href="{{ home_url('/') }}">{{ $site_name }}</a>
        </div>
        <div class="col-12 col-md-8">
          @if (has_nav_menu('secondary_navigation'))
          <ul class="nav">
            {!! wp_nav_menu($secondary_menu) !!}
          </ul>
          @endif
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
