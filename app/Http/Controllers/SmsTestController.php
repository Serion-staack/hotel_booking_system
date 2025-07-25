<?php

namespace App\Http\Controllers;

use App\Services\SmsService;
use Illuminate\Http\Request;

class SmsTestController extends Controller
{
    public function SmsTest(SmsService $smsService)
    {
        $to='+355675885332';
        $message='Hello World';

        $smsService->sendSms($to,$message);

        return response()->json(['message'=>'Message Sent']);

    }
}
