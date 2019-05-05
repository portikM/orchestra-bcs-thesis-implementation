<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';

    protected $fillable = [
        'phone_number',
        'subscriber_type',
        'address',
        'city',
        'postal_code',
        'user_id',
    ];

    public function subscriber()
    {
        return $this->get();
    }

    public function systems()
    {
        return $this->belongsToMany('App\System', 'subscribers_systems')->withPivot('system_state');
    }
}
