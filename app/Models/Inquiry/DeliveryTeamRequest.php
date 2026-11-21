<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Model;

class DeliveryTeamRequest extends Model
{
    protected $table = 'delivery_team_requests';

    protected $fillable = [
        'name',
        'email',
        'company',
        'country',
        'role',
        'service',
        'volume',
        'currency',
        'destination',
        'systems',
        'timeline',
        'engagement_model',
        'message',
        'status',
    ];
}
