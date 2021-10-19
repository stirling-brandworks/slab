{{--
  Title: Alert
  Description: Alert component
  Category: widgets
  Mode: edit
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  @include ('components.alert', get_field('alert'))
</div>
