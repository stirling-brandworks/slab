{{--
  Title: Accordion
  Description: Accordion section
  Category: widgets
  Mode: edit
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  @include ('components.accordion', ['items' => get_field('accordion_items')])
</div>
