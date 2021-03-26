<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $fillable=[
        'body_temp',
        'rfid'
    ];
}
