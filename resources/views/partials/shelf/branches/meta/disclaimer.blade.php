@php
  $disclaimer = get_field('regular_hours_disclaimer');
  $disclaimerAlt = get_field('alternate_hours_disclaimer');
  $disclaimerAltEnabled = get_field('enable_alternate_hours');
@endphp

@if ($disclaimer || $disclaimerAlt)
<div class="text-muted small"><em>*{{ 'enabled' == $disclaimerAltEnabled ? $disclaimerAlt : $disclaimer }}</em></div>
@endif




