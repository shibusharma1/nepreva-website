<?php

namespace App\Mail;

// use App\Models\ContactModel;

use App\Models\Inquiry\AppointmentModel;
use App\Models\Inquiry\ContactModel;
use App\Models\Settings\SettingModel;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public AppointmentModel $contact;

    public function __construct(AppointmentModel $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        $data = SettingModel::find(1);

        return $this->subject('Your Appointment Request Has Been Received')
            ->view('emails.patient-appointment-mail', [
                'data' => $data,
                'contact' => $this->contact,
            ]);
    }
}
