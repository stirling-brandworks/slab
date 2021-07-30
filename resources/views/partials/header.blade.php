@if (has_nav_menu('secondary_navigation'))
<nav class="py-2 bg-light border-bottom">
  <div class="container d-flex flex-wrap justify-content-end">
    <ul class="nav">
      {!! wp_nav_menu($secondary_menu) !!}
    </ul>
  </div>
</nav>
@endif

<header class="mb-4 border-bottom banner">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ $site_name }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          {!! wp_nav_menu($primary_menu) !!}
        </ul>
      </div>
    </div>
  </nav>
</header>
