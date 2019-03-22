<?php

namespace App\Jobs;

use App\Vehicle;
use App\VehicleContact;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class VehicleContactEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact;
    protected $vehicle;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Vehicle $vehicle, VehicleContact $contact) {
        $this->vehicle = $vehicle;
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {

            Mail::send('email.vehicle_contact',
                ['contact' => $this->contact,
                    'vehicle' => $this->vehicle], function ($message) {
                    $to_email = 'lehone4hope@gmail.com';

                    $message->to($to_email)
                        ->subject('Vehicle Contact');
                });

        } catch (\Exception $e) {}
    }
}
