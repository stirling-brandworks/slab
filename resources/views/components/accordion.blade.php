@php
$uniqid = uniqid('accordion_');
$items = array_map(
function($item) { $item['slug'] = sanitize_title($item['title']); return $item; },
$items
);
@endphp
<div class="accordion" id="{{ $uniqid }}">
  @foreach ($items as $item)
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading-{{ $item['slug'] }}">
      <button class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapse-{{ $item['slug'] }}" aria-expanded="{{ $loop->first }}"
        aria-controls="collapse-{{ $item['slug'] }}">
        {!! $item['title'] !!}
      </button>
    </h2>
    <div id="collapse-{{ $item['slug'] }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
      aria-labelledby="heading-{{ $item['slug'] }}" data-bs-parent="#{{ $uniqid }}">
      <div class="accordion-body">
        {!! $item['content'] !!}
      </div>
    </div>
  </div>
  @endforeach
</div>
