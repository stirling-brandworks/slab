@php
  $disclaimer = get_field('regular_hours_disclaimer', $branch);
  $disclaimerAlt = get_field('alternate_hours_disclaimer', $branch);
  $disclaimerAltEnabled = get_field('enable_alternate_hours', $branch);
@endphp

@if ($disclaimer || $disclaimerAlt)
<div class="text-muted small"><em>*{{ 'enabled' == $disclaimerAltEnabled ? $disclaimerAlt : $disclaimer }}</em></div>
@endif




