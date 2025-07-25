<?php

namespace App\Services;

use Twilio\Rest\Client;

 class TwilioService
{
 protected $client;

   public function __construct()
   {
       $this->client = new Client(
       config('services.twilio.sid'),
       config('services.twilio.token'));
   }

   public function makeCall($to, $messageUrl)
   {
     return $this->client->calls->create($to,
     config('services.twilio.from'),
      ['url' => $messageUrl]);

   }

}
