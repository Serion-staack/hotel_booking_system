<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function show()
    {
        return view('bookings.stripe_test');
    }

    public function processPayment(Request $request)
    {
        $request->validate
        ([
            'stripeToken' => 'required|string',
        ]);

        Stripe::setApiKey(config('services.stripe.secret'));
        try
        {
            $charge=Charge::create([
                "amount"=>5000,
                "currency"=>"usd",
                "source" => $request->input('stripeToken'),
                "description"=>"Test payment from itsolutionstuff.com"
            ]);
            return view('bookings.stripe_receipt',['charge'=>$charge]);
        }
        catch (\Exception $e)
        {
            Log::error('Stripe Payment Error: '.$e->getMessage());

            return back()->with('error', $e->getMessage());
        }
    }
}
