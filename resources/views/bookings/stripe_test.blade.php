<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stripe Test Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stripe JS -->
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .payment-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #e0f5e9;
            color: #2f8f46;
            border: 1px solid #a8e5b5;
        }

        .alert-error {
            background: #fcebea;
            color: #cc1f1a;
            border: 1px solid #f5c6cb;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        #card-element {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: #fafafa;
            margin-bottom: 20px;
        }

        button {
            background-color: #6772e5;
            color: white;
            padding: 12px 18px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #5469d4;
        }
    </style>
</head>
<body>
<div class="payment-container">
    <h2>Stripe Test Payment</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    <form id="payment-form" method="POST" action="{{ route('stripe.store') }}">
        @csrf
        <label for="card-element">Card Details</label>
        <div id="card-element"></div>
        <button type="submit">Pay $50</button>
    </form>
</div>

<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();
    const card = elements.create('card', {
        style: {
            base: {
                fontSize: '16px',
                color: '#32325d',
                '::placeholder': {
                    color: '#a0aec0',
                },
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        }
    });
    card.mount('#card-element');

    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const {token, error} = await stripe.createToken(card);

        if (error) {
            alert(error.message);
        } else {
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    });
</script>
</body>
</html>
