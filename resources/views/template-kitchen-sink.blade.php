{{--
  Template Name: Kitchen Sink
--}}

@extends('layouts.default')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
<h2>Quicklinks</h2>
@include('components.quicklinks', compact('quicklinks'))

<hr />

<h2>Cards</h2>
<h3>Single Card</h3>
@include('components.card', $single_card['card'])

<h3>Multi Cards</h3>
<div class="row">
  @foreach ($multi_card as $card)
  <div class="col">
    @include('components.card', $card['card'])
  </div>
  @endforeach
</div>

<hr />

<h2>Sliders & Carousels</h2>
<h3>Slider</h3>
@if ($slider['slides'])
@include('components.slider', $slider)
@endif

<h3>Carousel</h3>
TBD

<hr />

<h2>Accordions & Tabs</h2>
<h3>Accordion</h3>
@if ($accordion_items)
@include('components.accordion', ['items' => $accordion_items])
@endif

<h3>Tabs</h3>
@if ($tabs)
@include('components.tabs', $tabs)
@endif

@endwhile
@endsection
