<?php

namespace App\Console\Commands;

use Vonage\Client;
use App\Models\User;
use Vonage\SMS\Message\SMS;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Vonage\Client\Credentials\Basic;

class SendSmsToAllNumbers extends Command
{
    protected $signature = 'sms:send';
    protected $description = 'Send an SMS to all numbers stored in the database';

    public function handle()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("964ce9a0", "IxBxvTa8F338EAmo");
        $client = new \Vonage\Client($basic);

        $numbers = User::pluck('contact_number')->toArray();

        foreach ($numbers as $number) {
            $message = new SMS( $number, '639635325851', 'Pagbuhat namos inyong task oy');
            $response = $client->sms()->send($message);

            if ($response->current()->getStatus() == 0) {
                $this->info("SMS sent successfully to {$number}.");
            } else {
                $this->error("Failed to send SMS to {$number}.");
            }
        }    

    }
}
