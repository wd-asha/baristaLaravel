<p>You made an order on the website Barista:</p>

@foreach($body as $row)
    Name: {{ $row->name }}<br>
    Price: {{ $row->price }}<br>
    Qty: {{ $row->qty }}<br><br>
@endforeach
<p>Order cost: $ {{ $total }}</p>
<p>Your order number: #{{ $orderid }}</p>
<p>You can monitor the status of your order in your personal account on the Barista website</p>
