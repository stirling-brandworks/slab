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
          <div class="col-12 col-md-3">
            @include('partials.shelf.databases.legend')
          </div>
          <div class="col-12 col-md-8 offset-md-1 database-tabs-order">
            @include('partials.shelf.databases.tabs')
          </div>
        </div>
        <div>
          @include('partials.shelf.databases.tab-panes')
          @include('partials.back-to-top')
        </div>
      </div>
    </section>
    @include('partials.content-page')
  @endwhile
@endsection
