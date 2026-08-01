<?php
namespace App\Mail;

use App\Models\Inquiry\AppointmentModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminAppointmentMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public AppointmentModel $contact;

    public function __construct(AppointmentModel $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('New Appointment Booking Received')
            ->view('emails.admin-appointment-mail', [
                'data' => $this->contact,
            ]);
    }
}