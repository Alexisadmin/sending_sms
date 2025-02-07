<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;


class TwilioSMSController extends Controller
{
    public function index()
    {
        $receiverNumber = "+2507*******";
        $message = "This is testing from ItSolutionStuff.com";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }

}
