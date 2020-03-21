<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Psychiatrist extends Authenticable
{
    use Notifiable;

    protected  $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'salary',
        'bank_name',
        'bank_number',
        'profile_img',
        'status',
    ];

    protected $hidden = ['password', 'remember_token'];
}
