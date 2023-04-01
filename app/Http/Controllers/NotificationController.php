<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function sendSmsNotification() {
        $basic  = new \Vonage\Client\Credentials\Basic("964ce9a0", "IxBxvTa8F338EAmo");
        $client = new \Vonage\Client($basic);
    
        define('BRAND_NAME', 'Thesis');
    
        $contact_Nums = User::pluck('contact_number')->toArray();
        $statuses = [];
    
        // foreach ($contact_Nums as $contact_Num) {
        //     $response = $client->sms()->send(
        //         new \Vonage\SMS\Message\SMS($contact_Num, BRAND_NAME, 'Pagbuhat namos inyong task oy')
        //     );
        //     $statuses[] = $response->current()->getStatus();
        // }

        $response = $client->sms()->send(
                    new \Vonage\SMS\Message\SMS("639271515748", BRAND_NAME, 'Pagbuhat namos inyong task oy')
                );
                $statuses[] = $response->current()->getStatus();
        $successCount = count(array_filter($statuses, function($status) {
            return $status == 0;
        }));
    
        echo "Sent SMS notifications to $successCount users successfully.";
    }
    // public function sendSmsNotification() {
    //     $receiverNumber = "+639635325851";
    //     $message = " Test message notification";

    //     try {

    //         $account_sid = getenv("TWILIO_SID");
    //         $auth_token = getenv("TWILIO_TOKEN");
    //         $twilio_number = getenv("TWILIO_FROM");

    //         $client = new Client($account_sid, $auth_token);
    //         $client->messages->create($receiverNumber, [
    //             'from' => $twilio_number,
    //             'body' => $message
    //         ]);
    //         dd('SMS sent successfully');
    //     }catch (Exception $e) {
    //         dd("Error:" . $e->getMessage());
    //     }
    // }
    
}
