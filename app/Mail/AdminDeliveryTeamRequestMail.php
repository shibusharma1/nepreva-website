<?php

namespace App\Mail;

use App\Models\Inquiry\DeliveryTeamRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminDeliveryTeamRequestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public DeliveryTeamRequest $contact;

    public function __construct(DeliveryTeamRequest $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('New Delivery Team Request Received')
            ->view('emails.admin-delivery-team-request', [
                'data' => $this->contact,
            ]);
    }
}
