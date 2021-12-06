{{--
  Template Name: Kitchen Sink
--}}

@extends('layouts.full-width')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="pt-3">
        <div class="container">
          @include('partials.content-page')

          <h2 class="mb-3">Alert</h2>
          <div class="mb-2">
            @include('components.alert', $alert)
          </div>

          <hr />

          <h2 class="mb-3">Quicklinks</h2>
          <div class="row">
            @foreach ($quicklinks as $quicklink)
            <div class="col">
              @include('components.quicklink', $quicklink)
            </div>
            @endforeach
          </div>

          <hr />

          <h2 class="mb-3">Cards</h2>
          <h3>Single Card</h3>
          <div class="mb-5" style="width: 32rem;">
            @include('components.card', $single_card)
          </div>

          <h3>Multi Cards</h3>
          <div class="row mb-5">
            @foreach ($multi_card as $card)
            <div class="col">
              @include('components.card', $card)
            </div>
            @endforeach
          </div>

          <hr />


          <h2 class="mb-3">Legend</h2>
          <div class="mb-5" style="width: 32rem;">
            @include('partials.shelf.databases.legend')
          </div>

          <hr />

          <h2 class="mb-3">Sliders &amp; Carousels</h2>
          <h3 class="mb-3">Slider</h3>
          <div class="mb-5">
            @if ($slider['slides'])
            @include('components.slider', $slider)
            @endif
          </div>

          <h3 class="mb-3">Carousel</h3>
          TBD

          <hr />

          <h2 class="mb-3">Accordions &amp; Tabs</h2>
          <h3 class="mb-3">Accordion</h3>
          <div class="mb-5">
            @if ($accordion_items)
            @include('components.accordion', ['items' => $accordion_items])
            @endif
          </div>

          <h3 class="mb-3">Tabs</h3>
          @if ($tabs)
          @include('components.tabs', $tabs)
          @endif
        </div>
    </div>
  @endwhile
@endsection
