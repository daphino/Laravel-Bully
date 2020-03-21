<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $fillable = ['room_name'];

    public function chats()
    {
        return $this->hasMany('App\Chat', 'room_name', 'room_name');
    }
}
