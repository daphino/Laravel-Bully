<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionare extends Model
{
    protected $fillable = [
        'question',
        'type',
        'options',
        'order',
    ];
}
