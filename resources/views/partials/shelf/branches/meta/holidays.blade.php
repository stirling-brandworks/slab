@php $holidays = get_field('holidays') @endphp

@if ( $holidays )
<div class="slab-sidebar bg-white slab-edge border py-3 pe-3">
	<h3 class="ps-3">Holidays</h3>
	<div class="slab-sidebar__content slab-sidebar__content--wo-footer">
		<table class="table table-striped">
			@foreach ($holidays as $holiday)
			@php
				$dateFormatted = DateTime::createFromFormat('Ymd', $holiday['date']);
			@endphp
	    	<tr>
	    		<td  class="ps-3"><div class="small text-muted">{!! $holiday['name'] !!}</div>{!! $dateFormatted->format( 'F dS, Y' ) !!}</td>
	    		<td class="text-end fw-bold">{{ '1' == $holiday['closed'] ? 'Closed' : $holiday['opening_hour'] . " - " . $holiday['closing_hour'] }}</td>
	    	</tr>
	  		@endforeach
	  	</table>
	  </div>
</div>
@endif


