<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'room_name',
        'psychiatrist_id',
        'customer_id',
        'status',
        'chat',
    ];

    protected function room()
    {
        return $this->belongsTo('App\ChatRoom');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function psychiatrist()
    {
        return $this->belongsTo('App\Psychiatrist');
    }
}
