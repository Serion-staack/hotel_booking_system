<?php

namespace App\Http\Controllers;

use App\Services\TwilioService;
use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class CallController extends Controller
{
    public function call(TwilioService $twilio)
    {
        $to = '+355675885332';
       /* $twimlUrl = route('twilio.voice');*/
       /* $twimlUrl = 'https://abcd1234.ngrok.io/twilio/voice';*/
        $twimlUrl = config('services.twilio.twiml_url');

        $twilio->makeCall($to, $twimlUrl);

        return 'Call is being placed!';
    }


   public function voiceResponse()
    {
        $twiml = new \Twilio\TwiML\VoiceResponse();
        $twiml->say("Hello, this is a test call from your Laravel application!", ['voice' => 'alice']);

        return response($twiml)->header('Content-Type', 'text/xml');
    }

    public function ivr(Request $request)
    {
        $twiml = new VoiceResponse();

        $gather = $twiml->gather([
            'input' => 'dtmf',
            'numDigits' => 1,
            'action' => route('twilio.handle_input', [], false),
            'method' => 'POST',
        ]);

        $gather->say('Press 1 to confirm your reservation. Press 2 to speak with the reception.', ['voice' => 'alice']);

        $twiml->redirect(route('twilio.ivr', [], false), ['method' => 'POST']);

        return response($twiml)->header('Content-Type', 'text/xml');
    }

    public function handleInput(Request $request)
    {
        $twiml = new VoiceResponse();
        $digit = $request->input('Digits');

        if ($digit == '1') {
            $twiml->say('You have chosen to confirm the reservation. Thank you!', ['voice' => 'alice']);
        } elseif ($digit == '2') {
            $twiml->say('Connecting you to the reception.', ['voice' => 'alice']);
            $twiml->dial('+3556xxxxxxx'); // Replace with actual reception number
        } else {
            $twiml->say('Invalid choice. Please try again.', ['voice' => 'alice']);
            $twiml->redirect(route('twilio.ivr', [], false), ['method' => 'POST']);
        }

        return response($twiml)->header('Content-Type', 'text/xml');
    }



}
