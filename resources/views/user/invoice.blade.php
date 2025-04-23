<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ date('YmdHi') . '/' . $pickups->id }}</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        h2{ text-align: center; font-weight:bold; font-size:25px; }
        .invoice{ text-align: left; }
        .dateinfo{ text-align: right; }
    </style>
</head>
<body>
    <h2><u>Invoice</u></h2>
    <p class="invoice"><strong>Invoice No:</strong> {{ date('YmdHis', strtotime($pickups->created_at)) . '/' . $pickups->id }}</p>
    <p class="dateinfo"><strong>Date:</strong> {{ now()->format('d/m/Y') }}</p>

    <Strong>Bill To:</strong>&nbsp;&nbsp;<span>{{ $pickups->reciever_name }}</span>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Pickup Date</th>
                <th>Pickup Location</th>
                <th>Weight</th>                
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $pickups->company_name }}</td>
                <td>{{ $pickups->pickup_date}}</td>
                <td>{{ $pickups->pickup_location}}</td>
                <td>{{ $pickups->weight }}</td>
                <td>{{ $pickups->rate }}</td>
            </tr>
        </tbody>
    </table>

    <p><strong>Total:</strong> Rs. {{ $pickups->rate }}</p>

    <p><small>This is system generated bill. No need to stamp.</small></p>
</body>
</html>
