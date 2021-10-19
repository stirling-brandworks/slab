@extends('layouts.default')

@section('content')
@include('partials.page-header')

@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, but the page you were trying to view does not exist.', 'slab') }}
</div>
{!! get_search_form(false) !!}
@endif
@endsection
