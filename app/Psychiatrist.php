<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psychiatrist extends Model
{
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

    protected $hidden = ['password'];
}
