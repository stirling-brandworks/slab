{{--
  Title: Tabs
  Description: Tabbed section
  Category: widgets
  Mode: edit
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  @include ('components.tabs', ['tabs' => get_field('tabs')])
</div>
