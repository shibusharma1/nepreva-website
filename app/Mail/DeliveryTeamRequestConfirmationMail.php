<?php

namespace App\Mail;

use App\Models\Inquiry\DeliveryTeamRequest;
use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeliveryTeamRequestConfirmationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public DeliveryTeamRequest $contact;

    public function __construct(DeliveryTeamRequest $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        $data = SettingModel::find(1);

        return $this->subject('Your Delivery Team Request Has Been Received')
            ->view('emails.delivery-team-request-confirmation', [
                'data' => $data,
                'contact' => $this->contact,
            ]);
    }
}
