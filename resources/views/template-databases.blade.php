{{--
  Template Name: Databases Index
--}}

@extends('layouts.full-width')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <section id="top" class="bg-light pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3 order-2 order-md-0">
            @include('shelf.partials.databases.legend')
          </div>
          <div class="col-12 col-md-8 offset-md-1 database-tabs-order order-0 order-md-3">
            @include('shelf.partials.databases.tabs')
          </div>
        </div>
        <div>
          @include('shelf.partials.databases.tab-panes')
          @include('partials.back-to-top')
        </div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
