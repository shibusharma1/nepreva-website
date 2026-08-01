<?php

namespace App\Models\NewsLetters;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{

    protected $table = "newsletter_subscribers";

    protected $fillable = [
        
        'name',
        'email',
        'is_active',
        'subscribed_at',
        'unsubscribed_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];
}
