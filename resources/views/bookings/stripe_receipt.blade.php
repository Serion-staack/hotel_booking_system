<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            padding: 40px;
            max-width: 600px;
            margin: auto;
        }
        .receipt {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4CAF50;
        }
        .info {
            margin-top: 20px;
            font-size: 1.1em;
        }
        .info strong {
            display: inline-block;
            width: 150px;
        }
        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #555;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="receipt">
    <h1>Payment Receipt</h1>
    <p>Thank you for your payment. Here are the details:</p>

    <div class="info">
        <p><strong>Payment ID:</strong> {{ $charge->id }}</p>
        <p><strong>Amount:</strong> ${{ number_format($charge->amount / 100, 2) }}</p>
        <p><strong>Currency:</strong> {{ strtoupper($charge->currency) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($charge->status) }}</p>
        <p><strong>Payment Method:</strong> {{ $charge->payment_method_details->type ?? 'N/A' }}</p>
        <p><strong>Created At:</strong> {{ \Carbon\Carbon::createFromTimestamp($charge->created)->toDayDateTimeString() }}</p>
    </div>

    <div class="footer">
        <p>Hotel Management System &copy; {{ date('Y') }}</p>
    </div>
</div>
</body>
</html>
