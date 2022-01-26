<address class="text-muted">
    @if ($address['name'])
        {{ $address['name'] }}<br>
    @endif
    {{ $address['street_number'] }} {{ $address['street_name'] }}<br>
    {{ $address['city'] }}, {{ $address['state'] }} {{ $address['post_code'] }}<br>
</address>
