<?php

namespace App\Mail;

use App\Vehicle;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VehicleContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $vehicle;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Vehicle $vehicle, \App\VehicleContact $contact) {
        $this->vehicle = $vehicle;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.vehicle_contact');
    }
}
