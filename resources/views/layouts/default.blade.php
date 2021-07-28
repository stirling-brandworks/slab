@extends('layouts._base')

@section('_content')
<div class="container">
  <div class="row">
    <main class="main col">
      @yield('content')
    </main>
    @if (App\display_sidebar())
    <aside class="sidebar col-md-4 col-lg-3">
      @include('partials.sidebar')
    </aside>
    @endif
  </div>
</div>
@endsection
