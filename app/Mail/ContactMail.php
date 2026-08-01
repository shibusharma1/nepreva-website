<?php

namespace App\Mail;

use App\Models\Inquiry\ContactModel;
use App\Models\Settings\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public ContactModel $contact;

    public function __construct(ContactModel $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        $data = SettingModel::find(1);

        return $this->subject('New Contact Form Submission Received')
            ->view('emails.contact-mail', [
                'data' => $data,
                'contact' => $this->contact,
            ]);
    }
}
