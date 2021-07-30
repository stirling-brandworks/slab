{{--
  Title: Card
  Description: Card component
  Category: widgets
  Mode: edit
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  @include ('components.card', get_field('card'))
</div>
