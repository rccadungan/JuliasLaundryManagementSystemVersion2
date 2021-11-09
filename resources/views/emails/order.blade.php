<html>
<head>Julias Laundry</head>
<body>
    Order no: {{ $request['service_order_no'] }}
    <br>
    Received date: {{ $request['received_date'] }}
    <br>
    Pick up date: {{ $request['pickup_date'] }}


    <br><br>
    @for ($index = 0; $index < count($request['articles']); $index++)
        Article: {{ $request['articles'][$index] }},
        Price: {{ $request['unitPrices'][$index] }},
        <br><br>
    @endfor
</body>
</html>