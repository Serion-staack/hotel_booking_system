<?php

namespace App\Services;

use Twilio\Rest\Client;

class SmsService
{
    protected $client;

    public function __construct()
    {
        $sid = config('services.twilio.sid');
        $token = config('services.twilio.token');
        $from = config('services.twilio.from');

        if (!$sid || !$token || !$from) {
            throw new \Exception('Twilio credentials are missing or not configured correctly.');
        }

        $this->client = new Client($sid, $token);
    }

    public function sendSms($to, $message)
    {
        return $this->client->messages->create($to, [
            'from' => config('services.twilio.from'),
            'body' => $message,
        ]);
    }
}
