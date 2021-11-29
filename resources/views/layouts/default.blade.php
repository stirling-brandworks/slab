@extends('layouts._base')

@section('_content')

@include('partials.page-header')

<div class="container">
  <div class="row">

    @if(App\display_sidebar())
      <aside class="sidebar mb-5 col-md-4">
        @include('partials.sidebar')
      </aside>
    @endif

    <main class="main @if(App\display_sidebar()) col-md-8 @else col @endif page-content">
      <div class="pt-3">
        @yield('content')
      </div>
    </main>

  </div>
</div>
@endsection