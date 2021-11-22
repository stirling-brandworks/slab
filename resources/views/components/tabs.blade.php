@php
$tabs = array_map(function($tab) { $tab['slug'] = sanitize_title($tab['title']); return $tab; }, $tabs)
@endphp
<ul class="nav nav-pills d-md-flex justify-content-md-center my-4" role="tablist">
  @foreach ($tabs as $tab)
  <li class="nav-item mx-md-3" role="presentation">
    <button class="nav-link {{ $loop->first ? 'active' : '' }} text-uppercase" id="{{ $tab['slug'] }}-tab" data-bs-toggle="tab"
      data-bs-target="#{{ $tab['slug'] }}" type="button" role="tab" aria-controls="{{ $tab['slug'] }}"
      aria-selected="{{ $loop->first }}">
      {!! $tab['title'] !!}
    </button>
  </li>
  @endforeach
</ul>
<div class="tab-content d-md-flex justify-content-md-center">
  @foreach ($tabs as $tab)
  <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $tab['slug'] }}" role="tabpanel"
    aria-labelledby="{{ $tab['slug'] }}-tab">
    {!! $tab['content'] !!}
  </div>
  @endforeach
</div>
