<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;
    protected $table = 'cl_appointments';
    protected $fillable = [
        'request_type',
        'full_name',
        'email',
        'phone',
        'country',
        'location',
        'service',
        'appointment_date',
        'appointment_time',
        'subject',
        'message',
        'status',
    ];
}
