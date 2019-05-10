<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriberSystem extends Model
{
    protected $table = 'subscribers_systems';

    protected $fillable = [
        'subscriber_id',
        'equipment_id'
    ];
}
